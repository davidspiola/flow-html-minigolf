<?php
namespace HTL3R\MinigolfUO\Controller;

/*
 * This file is part of the HTL3R.MinigolfUO package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use HTL3R\MinigolfUO\Domain\Model\Hole;

class HoleController extends ActionController
{

    /**
     * @Flow\Inject
     * @var \HTL3R\MinigolfUO\Domain\Repository\HoleRepository
     */
    protected $holeRepository;

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('holes', $this->holeRepository->findAll());
    }

    /**
     * @param \HTL3R\MinigolfUO\Domain\Model\Hole $hole
     * @return void
     */
    public function showAction(Hole $hole)
    {
        $this->view->assign('hole', $hole);
    }

    /**
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * @param \HTL3R\MinigolfUO\Domain\Model\Hole $newHole
     * @return void
     */
    public function createAction(Hole $newHole)
    {
        $this->holeRepository->add($newHole);
        $this->addFlashMessage('Created a new hole.');
        $this->redirect('index');
    }

    /**
     * @param \HTL3R\MinigolfUO\Domain\Model\Hole $hole
     * @return void
     */
    public function editAction(Hole $hole)
    {
        $this->view->assign('hole', $hole);
    }

    /**
     * @param \HTL3R\MinigolfUO\Domain\Model\Hole $hole
     * @return void
     */
    public function updateAction(Hole $hole)
    {
        $this->holeRepository->update($hole);
        $this->addFlashMessage('Updated the hole.');
        $this->redirect('index');
    }

    /**
     * @param \HTL3R\MinigolfUO\Domain\Model\Hole $hole
     * @return void
     */
    public function deleteAction(Hole $hole)
    {
        $this->holeRepository->remove($hole);
        $this->addFlashMessage('Deleted a hole.');
        $this->redirect('index');
    }
}
