<?php

/**
 * member actions.
 *
 * @package    dksys
 * @subpackage member
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class memberActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->members = Doctrine_Core::getTable('Member')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->member = Doctrine_Core::getTable('Member')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->member);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MemberForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MemberForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($member = Doctrine_Core::getTable('Member')->find(array($request->getParameter('id'))), sprintf('Object member does not exist (%s).', $request->getParameter('id')));
    $this->member = $member;
    $this->form = new MemberForm($member);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($member = Doctrine_Core::getTable('Member')->find(array($request->getParameter('id'))), sprintf('Object member does not exist (%s).', $request->getParameter('id')));
    $this->form = new MemberForm($member);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($member = Doctrine_Core::getTable('Member')->find(array($request->getParameter('id'))), sprintf('Object member does not exist (%s).', $request->getParameter('id')));
    $member->delete();

    $this->redirect('member/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $member = $form->save();

      $this->redirect('member/edit?id='.$member->getId());
    }
  }
}
