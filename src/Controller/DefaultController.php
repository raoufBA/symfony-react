<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRoutiong":null})
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
/**
 * @Route("/api/freelancers", name="freelancers")
 * @return \Symfony\Component\HttpFoundation\JsonResponse;  
 */
    public function getFreelancers() : JsonResponse {

        $users = [
            [
                'id' => 1,
                'name' => 'Olususi Oluyemi',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/50.jpg',
                'skills' => ['java','javascript', 'html']
            ],
            [
                'id' => 2,
                'name' => 'Camila Terry',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/men/42.jpg',
                'skills' => ['php','Symfony']
            ],
            [
                'id' => 3,
                'name' => 'Joel Williamson',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/67.jpg',
                'skills' => ['javascript', 'react']
            ],
            [
                'id' => 4,
                'name' => 'Deann Payne',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/58.jpg',
                'skills' => ['java','Angular', 'html']
            ],
            [
                'id' => 5,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/men/89.jpg',
                'skills' => ['Sass','javascript', 'Html5']
            ],
            [
                'id' => 6,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/73.jpg',
                'skills' => ['java','SpringBoot', 'html']
            ],
            [
                'id' => 7,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/66.jpg',
                'skills' => ['java','Php', 'css']
            ],
            [
                'id' => 8,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/men/74.jpg',
                'skills' => ['java','mysql', 'Rest api']
            ],
            [
                'id' => 9,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'imageURL' => 'https://randomuser.me/api/portraits/women/38.jpg',
                'skills' => ['java','C++', 'devOps']
            ]
        ];
       
        return new JsonResponse($users);
    

    }


    /**
 * @Route("/api/companies", name="companies")
 * @return \Symfony\Component\HttpFoundation\JsonResponse;  
 */
public function getCompanies() : JsonResponse {

    $companies = [
        [
            'id' => 1,
            'name' => 'BNP',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'imageURL' => 'http://bnbjob.plateformeduweb.com/sites/default/files/styles/experts_de_prestige/public/2020-09/philips_2.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Samsung',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'imageURL' => 'http://bnbjob.plateformeduweb.com/sites/default/files/styles/experts_de_prestige/public/2020-08/visu_pnb.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Benefit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'imageURL' => 'http://bnbjob.plateformeduweb.com/sites/default/files/styles/experts_de_prestige/public/2020-09/visu_philips.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Citadium',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'imageURL' => 'http://bnbjob.plateformeduweb.com/sites/default/files/styles/experts_de_prestige/public/2020-08/visu_2_0.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Finac',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'imageURL' => 'http://bnbjob.plateformeduweb.com/sites/default/files/styles/experts_de_prestige/public/2020-08/visu_ggl.jpg'
        ]
    ];
   
    return new JsonResponse($companies);


}
}
