<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body>

    <?php
    $books = [];
    for ($i = 1; $i <= 34; $i++) {
        $books[] = "./img/books/Book{$i}.avif";
    }

    ?>



    <?php include_once './_templates/navbar.php'; ?>





    <!-- ============================ Books Gallery =========================== -->
    <div class="md:w-[80%] w-full mx-auto md:mt-10 mt-5">
        <div class="text-center py-4 mb-4" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="font-semibold text-3xl" data-aos="fade-down" data-aos-duration="1000">Dr.Jc.S.M.Panneerselvam’s Books</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:px-16 px-3 pb-16">
            <?php foreach ($books as $img): ?>
                <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                    <img src="<?= $img ?>" alt="Gallery Image"
                        class="w-full object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <!-- Optional overlay content -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>












    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>