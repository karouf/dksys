<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $member->getId() ?></td>
    </tr>
    <tr>
      <th>Firstname:</th>
      <td><?php echo $member->getFirstname() ?></td>
    </tr>
    <tr>
      <th>Lastname:</th>
      <td><?php echo $member->getLastname() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $member->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Birth place:</th>
      <td><?php echo $member->getBirthPlace() ?></td>
    </tr>
    <tr>
      <th>Citizenship:</th>
      <td><?php echo $member->getCitizenship() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $member->getAddress() ?></td>
    </tr>
    <tr>
      <th>Postcode:</th>
      <td><?php echo $member->getPostcode() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $member->getCity() ?></td>
    </tr>
    <tr>
      <th>Ssn:</th>
      <td><?php echo $member->getSsn() ?></td>
    </tr>
    <tr>
      <th>Insurance:</th>
      <td><?php echo $member->getInsurance() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $member->getPhone() ?></td>
    </tr>
    <tr>
      <th>Mobile:</th>
      <td><?php echo $member->getMobile() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $member->getEmail() ?></td>
    </tr>
    <tr>
      <th>Job:</th>
      <td><?php echo $member->getJob() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $member->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $member->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('member/edit?id='.$member->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('member/index') ?>">List</a>
