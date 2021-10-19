<!-- Testimonials -->
<section class="section">
    <div class="container">
        <div class="title">
            <h1>Testimonials</h1>
        </div>
    </div>
    <div class="testimonial-center container">
        <?php
        $testimonials = get_testimonials();

        foreach ($testimonials as $testimonial) {
            echo '
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>' . $testimonial["testimonial"] .
                '</p><div class="rating">';
            for ($x = 1; $x <= 5; $x++) {
                if ($x <= $testimonial["rating"]) {
                    echo '<i class="bx bxs-star"></i>';
                } else {
                    echo '<i class="bx bx-star"></i>';
                }
            }
            echo '</div><div class="img-cover">
            <img src="' . $testimonial["image"] . '" alt="" />
          </div>
          <h4>' . $testimonial["name"] . '</h4>
        </div>
        ';
        }
        ?>

    </div>
</section>