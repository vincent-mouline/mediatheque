<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Routing\Annotation\Route;

class MusicController extends AbstractController
{
    /**
     * Default music path
     */
    private const MUSIC_FOLDER = '/home/vinny/Musique';


    /**
     * @Route("/music/index", name="music_index")
     */
    public function index()
    {
        return $this->render('music/index.html.twig', [
            'controller_name' => 'MusicController',
        ]);
    }

    /**
     * @Route("/music/list", name="music_list")
     */
    public function list()
    {
        $finder = new finder();
        $finder->files()->in($this::MUSIC_FOLDER);

        return $this->render('music/list.html.twig', ['music' => $finder]);
    }
}
