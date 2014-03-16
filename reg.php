<?php include 'includes/header.php'; ?> 

 <tr>
                <td class="developmentNotes"><form action="formAction.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

                  <p align="center">

                    <label for="name2"><span class="Maintext">Your name</span></label>

                    <span class="Maintext">

                      <input type="text" name="txtName" id="name2" />

                      </span></p>

                  <p align="center"> <span class="Maintext">

                    <label for="email">Your email</label>

                    <input type="text" name="txtEmail" id="email" />

                    </span></p>

                  <p align="center"><span class="Maintext">

                    <label for="email">Your password</label>

                    <input type="password" name="txtPassword" id="password" />

                    </span></p>

                  <p align="center"><span class="Maintext">

                    <input type="submit" name="submit" id="submit" value="Submit" />

                    </span></p>

                  </form>
      </td>

</tr>
</table>

<?php include 'includes/footer.php'; ?>