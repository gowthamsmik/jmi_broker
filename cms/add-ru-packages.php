<?php include('includes/header.php');

?>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Добавить пакет</h1>
            <hr class="mb-4">
            <form class="add-ru-package">

                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Имя</label>
                    <input name="name" type="text" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Цена</label>
                    <input name="price" type="number" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Линия скидок</label>
                    <input name="discount_line" type="text" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Теговая линия</label>
                    <input name="tag_line" type="text" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Описание</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn app-btn-primary">Сохранять</button>
            </form>
        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <footer class="app-footer">
        <div class="container text-center py-3">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


        </div>
    </footer><!--//app-footer-->

</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>