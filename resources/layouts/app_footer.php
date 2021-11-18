        <!-- footer content -->
        <?php include_once '../layouts/utilities/footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>
      <?php include_once '../layouts/utilities/script.php'; ?>

      <script>
          // update
        $(document).on("submit","#demo-form", function(e){
          e.preventDefault();

          var id = $('#id').val();
          var nama = $('#nama').val();

          $.ajax({
            method: "POST",
            url : "<?=url()?>models/category/update.php",
            data: {
              id: id,
              nama: nama
            },
            dataType: 'JSON',
            success: function(res) {
              location.reload();
            }
          })
        })


        $(function(){
        // Format Currency
        $( '#price' ).mask('000.000.000', {reverse: true});

        // funtion for insert category furniture
        $('#save').click(function(e){

            var data = $('#demo-form').serialize();
            var name = $('#nama').val();
            var url = "<?=url()?>models/category/store.php"

            // Validation
            if (name == "") {
              $('#err').html('Nama Harus di isi');
            }

            if(name != "") {
              $.ajax({
                type: 'POST',
                url: url,
                data: data,
                dataType: "JSON",
                success: function(res) {
                  location.reload();
                },error: function (err) {
                  console.log(err);
                }
              });
            }
        });

        }); 

        function ButtonEdit(id) {

          var url = "<?=url()?>models/category/update.php";

          $('.modal').modal('show')
          $('.modal-title').html('Edit Category')
          $('#demo-form').attr("action", url)

          $.ajax({
            type: "GET",
            url: url,
            data: {id:id},
            success: function(res){
              var categoryData=JSON.parse(res);
              $('#id').val(categoryData.id)
              $('#nama').val(categoryData.nama)
            }
          })
        }

        


      </script>
  </body>
</html>