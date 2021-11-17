        <!-- footer content -->
        <?php include_once '../layouts/utilities/footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>
      <?php include_once '../layouts/utilities/script.php'; ?>

      <script>
        $(function(){
        // Format Currency
        $( '#price' ).mask('000.000.000', {reverse: true});

        // funtion for insert category furniture
          $('#save').click(function(){
            var data = $('#demo-form').serialize();
            var name = $('#nama').val();

            // Validation
            if (name == "") {
              $('#err').html('Nama Harus di isi');
            }

            if(name != "") {

              var url = "<?=url()?>models/Category.php"

              $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function(res) {
                  // location.reload();
                },error: function (err) {
                  console.log(err);
                }
              });
            }
          });
        }); 
      </script>
  </body>
</html>