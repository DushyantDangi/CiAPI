    <fieldset class="rating center-block">


                                                <?php
                                                $start_value = (!empty($getratingvalue) ? ($getratingvalue) : ('NA'));
                                                if (!empty($start_value)) {
                                                    ?>
                                                    <link rel="stylesheet" href="<?php echo base_url('public/rating/after_rate.css'); ?>">

                                                    <?php
                                                    $a = $b = $c = $d = $e = $f = $g = $h = $i = $j = "";
                                                    if ($start_value == 0.5) {
                                                        $a = 'clr_ye';
                                                    } elseif ($start_value == 1) {
                                                        $a = $b = 'clr_ye';
                                                    } elseif ($start_value == 1.5) {
                                                        $a = $b = $c = 'clr_ye';
                                                    } elseif ($start_value == 2) {
                                                        $a = $b = $c = $d = 'clr_ye';
                                                    } elseif ($start_value == 2.5) {
                                                        $a = $b = $c = $d = $e = 'clr_ye';
                                                    } elseif ($start_value == 3) {
                                                        $a = $b = $c = $d = $e = $f = 'clr_ye';
                                                    } elseif ($start_value == 3.5) {
                                                        $a = $b = $c = $d = $e = $f = $g = 'clr_ye';
                                                    } elseif ($start_value == 4) {
                                                        $a = $b = $c = $d = $e = $f = $g = $h = 'clr_ye';
                                                    } elseif ($start_value == 4.5) {
                                                        $a = $b = $c = $d = $e = $f = $g = $h = $i = 'clr_ye';
                                                    } elseif ($start_value == 5) {
                                                        $a = $b = $c = $d = $e = $f = $g = $h = $i = $j = 'clr_ye';
                                                    }
                                                    ?>


                                                    <input disabled="disabled" type="radio" class="<?php echo $j; ?>"   id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $i; ?>" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $h; ?>" id="star4" name="rating" value="4" /><label class = "full" for="star4" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $g; ?>" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $f; ?>" id="star3" name="rating" value="3" /><label class = "full" for="star3" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $e; ?>" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $d; ?>" id="star2" name="rating" value="2" /><label class = "full" for="star2" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $c; ?>"  id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $b; ?>"  id="star1" name="rating" value="1" /><label class = "full" for="star1" ></label>
                                                    <input disabled="disabled" type="radio" class="<?php echo $a; ?>"  id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf"></label>

                                                <?php } ?>
                                            </fieldset>
