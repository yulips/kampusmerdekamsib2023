<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Halaman Tambah Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function () {
        $("#form").validate({
          messages: {
            email: {
              required: "E-mail harus diisi",
              email: "Masukkan E-mail yang valid",
            },
          },
          errorPlacement: function (error, element) {
            error.appendTo(element.parent("td"));
          },

          submitHandler: function (form) {
          form.submit();
      }
        });
      });
    </script>
    <style type="text/css">
      * {
        font: 11px/20px Verdana, sans-serif;
      }
      h4 {
        font-size: 18px;
      }
      input {
        padding: 3px;
        border: 1px solid #999;
      }
      input.error,
      select.error {
        border: 1px solid red;
      }
      label.error {
        color: red;
        margin-left: 10px;
      }
      td {
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <h4>Tambah Data</h4>
    <form id="form" method="post" action="proses.php">
      <table>
        <tr>
          <td width="100">Nama Depan</td>
          <td>
            <input
              name="first_name"
              class="required"
              title="nama harus diisi"
              size="30"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td width="100">Nama Belakang</td>
          <td>
            <input
              name="last_name"
              class="required"
              title="nama harus diisi"
              size="30"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td>Email</td>

          <td>
            <input
              name="email"
              class="required"
              title="email harus diisi"
              size="40"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td>No. Telp</td>
          <td>
            <input
              name="phone"
              class="required"
              title="No. Telp harus diisi"
              size="30"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <input
              name="address"
              class="required"
              title="Alamat harus diisi"
              size="60"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
