<?php $courses = get_field('courses_courses');

if($courses) { ?>
    <div class="courses container">
        <div class="courses__wrapper">
            <?php foreach ($courses as $course) { ?>
                <div class="courses__course">
                    <?php if($course['image']) { ?>
                        <div class="courses__image" style="background-image:url('<?php echo $course['image']['url']; ?>');">
                            <?php if($course['additional_info']) { ?>
                                <div class="courses__additional">
                                    <p><?php echo $course['additional_info']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if($course['title']) { ?>
                        <div class="courses__title">
                            <p><?php echo $course['title']; ?></p>
                        </div>
                    <?php } ?>
                    <?php if($course['course_type']) { ?>
                        <div class="courses__course-type">
                            <p><?php echo $course['course_type']; ?></p>
                        </div>
                    <?php } ?>
                    <?php if($course['number_of_lessons'] || $course['time_taken']) { ?>
                        <div class="courses__lessons-time">
                            <p><?php if($course['number_of_lessons']) { echo $course['number_of_lessons']; }?> <?php if($course['time_taken']) { echo $course['time_taken']; } ?></p>
                        </div>
                    <?php } ?>
                    <?php if($course['description']) { ?>
                        <div class="courses__description">
                            <p><?php echo $course['description']; ?></p>
                        </div>
                    <?php } ?>
                    <?php if($course['button_embed']) { ?>
                        <div class="courses__button">
                            <?php echo $course['button_embed']; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>