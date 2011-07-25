<?php slot('section_title') ?>
Edit Member <?php echo $member->getFirstname() ?> <?php echo $member->getLastname() ?>
<?php end_slot() ?>

<?php include_partial('form', array('form' => $form)) ?>
