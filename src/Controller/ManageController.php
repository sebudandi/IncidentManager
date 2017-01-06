<?php

namespace App\Controller;

use App\Controller\AppController;
use ReflectionClass;
use ReflectionMethod;

class ManageController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->loadModel('Navigation');
        $this->loadModel('UserLevels');
    }

    public function index() {
        echo 'Bob<hr/>';
        $resources = $this->getResources();
        foreach ($resources as $key => $value) {
            echo 'Key Is ' . $key;
            foreach ($value as $maker => $resource) {
                echo $maker . '<br/>';
                print_r($resource);
            }
            //print_r($value);
            echo '<hr/>';
        }
        //print_r($allan);
        die();
    }

    public function opsgroups() {
        $resources = $this->getResources();
        $this->set(compact('resources', $resources));
    }

    public function createops($id = false) {
        $ops = $this->getActions($id);
        $this->set(compact('ops', $ops));
        $x = 0;
        if ($this->request->is('post')) {
            $sortedops = $this->SortOpsFxn($this->request->data);
            foreach ($sortedops as $key => $value) {
                $opsfxn = $this->Navigation->newEntity();
                $opsfxn = $this->Navigation->patchEntity($opsfxn, $value);
                if ($this->Navigation->save($opsfxn)) {
                    $x++;
                }
            }
            $count = count($sortedops);
            if ($count == $x) {
                $this->Flash->success(__('User Functionality created successfully.'));
                return $this->redirect(['action' => 'opslist']);
            } else {
                $this->Flash->error(__('Unable to create All User Functionality.'));
            }
        }
    }

    public function viewrole($id = false) {
        $role = $this->UserLevels->get($id);
        $this->set(compact('role', $role));
    }

    public function SortOpsFxn($data) {
        $x = 0;
        foreach ($data['rval'] as $key => $value) {
            if (in_array($value, $data['on_menu'])) {
                $on_menu_val = 'Yes';
            } else {
                $on_menu_val = 'No';
            }

            $setoptions[$x]['menu_title'] = $data['menu_title'][$value];
            $setoptions[$x]['load_page'] = strtolower($data['load_page'][$value]);
            $setoptions[$x]['on_menu'] = $on_menu_val;
            $setoptions[$x]['css'] = $data['css'][$value];
            $x++;
        }
        return $setoptions;
    }

    public function roles() {
        $roles = $this->UserLevels->find('all');
        $this->set(compact('roles', $roles));
    }

    public function createrole() {
        $roles = $this->UserLevels->find('all');
        $this->set(compact('roles', $roles));
        $role = $this->UserLevels->newEntity();
        if ($this->request->is('post')) {
            $role = $this->UserLevels->patchEntity($role, $this->request->data);
            if ($this->UserLevels->save($role)) {
                $this->Flash->success(__('User Role created successfully.'));
                return $this->redirect(['action' => 'roles']);
            }
            $this->Flash->error(__('Unable to create User Role.'));
        }
        $this->set('role', $role);
    }

    public function opslist() {
        $this->paginate = array(
            'limit' => 25,
            'order' => array(
                'id' => 'ASC'
        ));
        $options = array(
            "contain" => array('Parent'),
        );
        $opslist = $this->Navigation->find('all', $options);
        $this->set(compact('opslist', $this->paginate($opslist)));
    }

    public function newops() {
        $opslist = $this->Navigation->find('all', array(
            'conditions' => array(
                'parent_option' => 0, 'on_menu' => 'Yes')
                )
        );
        $this->set(compact('opslist', $opslist));
        $ops = $this->Navigation->newEntity();
        if ($this->request->is('post')) {
            $ops = $this->Navigation->patchEntity($ops, $this->request->data);
            if ($this->Navigation->save($ops)) {
                $this->Flash->success(__('New Operation created successfully.'));
                return $this->redirect(['action' => 'opslist']);
            }
            $this->Flash->error(__('Unable to create Operation.'));
        }
        $this->set('ops', $ops);
    }

    public function getControllers() {
        $files = scandir('../src/Controller/');
        $results = [];
        $ignoreList = [
            '.',
            '..',
            'Component',
            'AppController.php',
        ];
        foreach ($files as $file) {
            if (!in_array($file, $ignoreList)) {
                $controller = explode('.', $file)[0];
                array_push($results, str_replace('Controller', '', $controller));
            }
        }
        return $results;
    }

    public function getActions($controllerName) {
        $className = 'App\\Controller\\' . $controllerName . 'Controller';
        $class = new ReflectionClass($className);
        $actions = $class->getMethods(ReflectionMethod::IS_PUBLIC);
        $results = [$controllerName => []];
        $ignoreList = ['beforeFilter', 'afterFilter', 'initialize'];
        foreach ($actions as $action) {
            if ($action->class == $className && !in_array($action->name, $ignoreList)) {
                array_push($results[$controllerName], $action->name);
            }
        }
        return $results;
    }

    public function getResources() {
        $controllers = $this->getControllers();
        $resources = [];
        foreach ($controllers as $controller) {
            $actions = $this->getActions($controller);
            array_push($resources, $actions);
        }
        return $resources;
    }

}
