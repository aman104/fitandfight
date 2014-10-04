<div class="slider">

        <div class="cycle-slideshow"
            data-cycle-fx="scrollHorz"
            data-cycle-pause-on-hover="true"
            data-cycle-speed="600"
            data-cycle-prev="#prev"
            data-cycle-next="#next"
        >
            <?php foreach($sliders as $slider): ?>
                <img style="width: 940px; height: 480px;" src="/uploads/sliders/<?php echo $slider->getFile(); ?>" /> 
            <?php endforeach; ?>
        </div>

        

        <a href="#" id="prev" class="slider-left"></a>
        <a href="#" id="next" class="slider-right"></a>

</div>