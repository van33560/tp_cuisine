<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity()
     *
    */
    class Product
    {

        /**
         * @ORM\Id()
        * @ORM\GeneratedValue()
        * @ORM\Column(type="integer")
        */
                private $id;


        /**
         * @@ORM\Column(type="string")
         *
         */     private $titre;


        /**
         *@ORM\Column(type="string")
         *
         */
                private $auteur;


          /**
           *@ORM\Column(type="integer")
           *
            */
                private $nb_pages;

        /**
         * @ORM\Column(type="date", name="publication")
         */
                private $date;

        /**
         * @ORM\Column(type="boolean", name="disponible")
         */
                 private $disponible;


        /**
         * @ORM\Column(name="resum",type="string", length=300)
         */
                private $resum;


    }