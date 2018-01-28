<?php
function test($mail, $ime, $mesto, $broj, $narudzba){
	$final = '<body style="margin: 0; padding: 0;" yahoo="fix">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" background="img/billboard.jpg" bgcolor="#2a3647" style="background-image:url("img/billboard.jpg"); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover -o-background-size: cover; background-position: bottom center; background-repeat: no-repeat; background-color:#2a3647;">

    <tr>
      <td>
          <table width="600" cellpadding="0" cellspacing="0" align="center" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border:0; text-align:center;" class="content_width">    
            <tr>
              <td>
                <table width="600" height="1" align="center" bgcolor="#343f53" border="0"  cellpadding="0" cellspacing="0"style="height:1px!important; width:600px; background-color:#343f53; padding:0; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                  <tr>
                    <td></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
      </td>
    </tr>
      <tr>
        <td height="80">&nbsp;</td>
      </tr>
    <tr>
      <td>
        <table width="600" cellpadding="0" cellspacing="0" align="center" class="content_width" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"> 
          <tr>
            <td>
              <table width="450" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="content_width" align="left">
                <tr>
                  <td style="color: #fff; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 34px; font-weight: 700; text-transform: uppercase; line-height:50px; letter-spacing:1px;">Nova narudzba</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>          
      </td>
    </tr>
      <tr>
        <td height="100">&nbsp;</td>
      </tr>
  </table>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fbfbfb" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
      <tr>
        <td width="100%" height="100">&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="text-align:center;" class="content_width">
            <tr>
              <td style="color: #414d5f; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 700; letter-spacing:.5px; text-transform:uppercase;">Korisnik</td>
            </tr>
            <tr>
              <td width="100%" height="20">&nbsp;</td>
            </tr>        
            <tr>
              <td>
                <table width="1" height="20" align="center" bgcolor="#e9e9e9" border="0"  cellpadding="0" cellspacing="0"style="height:20px!important; padding:0; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                  <tr>
                    <td></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" height="1" align="center" bgcolor="#e9e9e9" border="0"  cellpadding="0" cellspacing="0"style="padding:0;border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                  <tr>
                    <td></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="100%" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table width="394" cellpadding="0" align="left" cellspacing="0"style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full_width">
                  <tr>
                    <td>
                      <table width="187" cellpadding="0" align="left" cellspacing="0"style="text-align:center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full_width">                          
                          <tr>
                            <td>
                                <img src="https://i.imgur.com/8XT2S6l.png" width="140" height="140" alt="" title="" align="center" border="0" style="display: inline-block; border:0;"/>
                            </td>
                          </tr>
                          <tr>
                            <td width="100%" height="20"></td>
                          </tr><tr>
                            <td style="color: #495d79; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 700;">Ime i prezime</td>
                          </tr>
                          <tr>
                            <td width="100%" height="40"></td>
                          </tr>
                  <tr>
                    <td>
                        <p style="color: #7187a7; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 14px; line-height:24px; letter-spacing:.5px; font-weight: 400;">' . $ime . '</p>
                    </td>
                      </table>
                      <table height="40" align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="post_sep">
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                      </table>

                      <table width="187" cellpadding="0" align="right" cellspacing="0"style="text-align:center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full_width">
                        <tr>
                          <td>
                              <img src="https://i.imgur.com/cXFEaGp.png" width="140" height="140" alt="" title="" align="center" border="0" style="display: inline-block; border:0;"/>
                          </td>
                        </tr><tr>
                          <td width="100%" height="20"></td>
                        </tr>
                        <tr>
                          <td style="color: #495d79; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 700;">Mesto</td>
                        </tr>
                        <tr>
                          <td width="100%" height="40"></td>
                        </tr>
                  <tr>
                    <td>
                        <p style="color: #7187a7; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 14px; line-height:24px; letter-spacing:.5px; font-weight: 400;">'.$mesto.'</p>
                    </td>
                  </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table height="40" align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="post_sep">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <table width="187" align="right" cellpadding="0" cellspacing="0"style="text-align:center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full_width">
                  <tr>
                    <td>
                        <img src="https://i.imgur.com/FmLobFF.png" width="140" height="140" alt="" title="" align="center" border="0" style="display: inline-block; border:0;"/>
                    </td>
                  </tr>
                  <tr>
                    <td width="100%" height="20"></td>
                  </tr>
                  <tr>
                    <td style="color: #495d79; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 700;">Broj mobilnog</td>
                  </tr>
                  <tr>
                    <td width="100%" height="40"></td>
                  </tr>
                  <tr>
                    <td>
                        <p style="color: #7187a7; font-family: "Raleway", Helvetica, Arial, sans-serif; font-size: 14px; line-height:24px; letter-spacing:.5px; font-weight: 400;">'.$broj.'</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

          </table>
        </td>
      </tr>
      <tr>
        <td width="100%" height="100"></td>
      </tr>
  </table>
<table width="100%" border="0" align="center" >
    <thead  align="center" >
      <tr>
        <th scope="col">Ime proizvoda</th>
        <th scope="col">Kolicina</th>
        <th scope="col">Cena</th>
      </tr>
    </thead>
    <tbody id="theBody" align="center" >
    '.$narudzba.'
    </tbody>
  </table>


</body>';
mail('berra.novaly@arockee.com', 'Nova narudžba - ' . $ime, $final);
}

function salonMail ($salon, $sender, $messege){
  mail($salon, $sender, $messege);
}
?>