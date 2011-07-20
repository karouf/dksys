<h1>Members List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Birth date</th>
      <th>Birth place</th>
      <th>Citizenship</th>
      <th>Address</th>
      <th>Postcode</th>
      <th>City</th>
      <th>Ssn</th>
      <th>Insurance</th>
      <th>Phone</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Job</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($members as $member): ?>
    <tr>
      <td><a href="<?php echo url_for('member/show?id='.$member->getId()) ?>"><?php echo $member->getId() ?></a></td>
      <td><?php echo $member->getFirstname() ?></td>
      <td><?php echo $member->getLastname() ?></td>
      <td><?php echo $member->getBirthDate() ?></td>
      <td><?php echo $member->getBirthPlace() ?></td>
      <td><?php echo $member->getCitizenship() ?></td>
      <td><?php echo $member->getAddress() ?></td>
      <td><?php echo $member->getPostcode() ?></td>
      <td><?php echo $member->getCity() ?></td>
      <td><?php echo $member->getSsn() ?></td>
      <td><?php echo $member->getInsurance() ?></td>
      <td><?php echo $member->getPhone() ?></td>
      <td><?php echo $member->getMobile() ?></td>
      <td><?php echo $member->getEmail() ?></td>
      <td><?php echo $member->getJob() ?></td>
      <td><?php echo $member->getCreatedAt() ?></td>
      <td><?php echo $member->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('member/new') ?>">New</a>
