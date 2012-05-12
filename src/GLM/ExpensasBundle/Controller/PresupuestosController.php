<?php

namespace GLM\ExpensasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sorien\DataGridBundle\Grid\Source\Entity;

class PresupuestosController extends Controller
{
    
    public function indexAction()
    {
        // Creates simple grid based on your entity (ORM)
        $source = new Entity('GLMExpensasBundle:Presupuesto');

        // or use Document source class for ODM
        //$source = new Document('MyProjectMyBundle:MyDocument');

        $grid = $this->get('grid');

        // Mass actions, query and row manipulations are defined here

        $grid->setSource($source);

        // Columns, row actions are defined here

        if ($grid->isReadyForRedirect())
        {
            // Data are stored, do redirect to prevent multiple post requests
            return new RedirectResponse($grid->getRouteUrl());
        }
        else
        {
            // To obtain data for template simply pass in the grid instance
            return $this->render('GLMExpensasBundle:Presupuestos:index.html.twig', array('data' => $grid));
        }
        //return $this->render('GLMExpensasBundle:Presupuestos:index.html.twig');
    }
}
