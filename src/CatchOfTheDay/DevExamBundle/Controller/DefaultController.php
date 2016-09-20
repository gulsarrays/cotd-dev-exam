<?php

namespace CatchOfTheDay\DevExamBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $items, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return [
            'items' => $items,
            'pagination' => $pagination,
        ];
    }

    /**
     * @Route("/add", name="add")
     * @Method("POST")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addAction(Request $request)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();
        
        // TODO - Read the new item's text from $request, add a new TodoListItem to the collection and save.
        if(!empty($request->request->get('todo-text-id')) && ($request->request->get('todo-text-id') > 0) ) {
            foreach($items as $k => $v) {
                if($v->id == $request->request->get('todo-text-id')) {
                    $items[$k]->text = $request->request->get('todo-text');
                }
            }
            $data = $items;
        } else {
            $newdata[count($items)] = array(
                'id' => count($items)+1,
                'text' => $request->request->get('todo-text'),
                'created' => date('d M Y h:m:s a'),
                'complete' => false
            );

            $data = array_merge($items,$newdata);
        }

        $manager->write($data);

        $isAjax = !empty($request->request->get('ajax')) ? $request->request->get('ajax') : 0;

        if($isAjax == 1) {
            return new JsonResponse(array('message' => 'Success!'), 200);
        } else {
            return $this->redirectToRoute('index');
        }

    }

    /**
     * @Route("/items/{itemId}/mark-as-complete", name="mark_as_complete")
     *
     * @param Request $request
     * @param string $itemId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function markAsComplete(Request $request, $itemId)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();

        // TODO - Look in $items for the item that matches $itemId, update it and save the collection.        
        $items[$itemId-1]->complete = true;
        $manager->write($items);

        $isAjax = !empty($request->query->get('ajax')) ? $request->query->get('ajax') : 0;

        if($isAjax == 1) {
            return new JsonResponse(array('message' => 'Success!'), 200);
        } else {
            return $this->redirectToRoute('index');
        }
    }

    /**
     * @Route("/items/{itemId}/mark-as-uncomplete", name="mark_as_uncomplete")
     *
     * @param Request $request
     * @param string $itemId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function markAsUnComplete(Request $request, $itemId)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();

        // TODO - Look in $items for the item that matches $itemId, update it and save the collection.
        $items[$itemId-1]->complete = false;
        $manager->write($items);

        $isAjax = !empty($request->query->get('ajax')) ? $request->query->get('ajax') : 0;

        if($isAjax == 1) {
            return new JsonResponse(array('message' => 'Success!'), 200);
        } else {
            return $this->redirectToRoute('list');
        }
    }

    /**
     * @Route("/list" , name="list")
     * @Template()
     */
    public function listAction(Request $request)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $items, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('CatchOfTheDayDevExamBundle:Default:list.html.twig', array('items' => $items,'pagination' => $pagination));
    }

    /**
     * @Route("/items/{itemId}/edit", name="edit")
     *
     * @param Request $request
     * @param string $itemId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function editAction(Request $request, $itemId)
    {
        $manager = $this->get('catch_of_the_day_dev_exam.manager.todo_list');
        $items = $manager->read();
        $itemName = "";
        foreach($items as $k => $v) {
            if($v->id == $itemId) {
                $itemName = $items[$k]->text;
                break;
            }
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $items, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        
        return $this->render('CatchOfTheDayDevExamBundle:Default:edit.html.twig', array('items' => $items,'itemId' => $itemId, 'itemName' => $itemName,'pagination' => $pagination));
    }

    
}
