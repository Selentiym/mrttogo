<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.08.2016
 * Time: 18:08
 */
?>

<section>
    <div class="container container-shift">
        <div class="row">
            <div class="order-form">
                <img src="<?php echo $base; ?>/img_thirdDesign/doctor.png">
                <div class="row"><p>Записаться на МРТ и/или КТ исследование можно с помощью формы обратной связи, специалист перезвонит вам через 10 мин! </p></div>
                <form id="callback-from-page">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <p>Ваше имя</p>
                            <input type="text" name="name" class="your-name form_field" value="" required>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <p>Ваш телефон</p>
                            <input type="text" name="phone" class="your-phone form_field" value="" required>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <button class="order-button" name="your-name" value="" size="40" type="submit"><span class="btn-title">Записаться <br> на МРТ и КТ</span></button>
                        </div>
                    </div>
                </form>
                <p>или по телефону <a href="tel:<?php echo $tel['raw']; ?>"><?php echo $tel['formatted']; ?></a></p>
            </div>
        </div>
    </div>
</section>