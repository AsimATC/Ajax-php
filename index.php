<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Kullanımı</title>
</head>

<body>

    <!-- Ajax Control -->
    <div id="ajax-sonuc"></div>


    <!-- Inner Form -->
    <form id="UrunForm">

        <input type="hidden" name="urunadi" value="Ürün adi">
        <h2>Ürün Adi</h2>
        <!-- Button -->
        <a href="javascript:void(0)" onclick="SepeteEkle()" class="btn btn-sm btn-tra-grey yellow-hover">
            <span class="flaticon-shopping-bag"></span>Sepete Ekle
        </a>

    </form>




    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- Ajax Script -->
    <script>
        function SepeteEkle() {
            $.ajax({
                url: 'ajax-controller.php',
                method: "POST",
                data: $('#UrunForm').serialize() + '&Islem=SepeteEkle',
                success: function(sonuc) {
                    $('#ajax-sonuc').html(sonuc);
                }
            })
        }
    </script>
</body>

</html>