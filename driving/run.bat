php artisan make:migration create_courses_table --create=tbl_courses

php artisan make:migration create_trainers_table --create=tbl_trainers

php artisan make:migration create_enquiries_table --create=tbl_enquiries

php artisan make:migration create_booking_table --create=tbl_booking


php artisan make:controller CourseController -r -m Course

php artisan make:controller TrainersController -r -m Trainers

php artisan make:controller EnquiriesController -r -m Enquiries

php artisan make:controller BookingController -r -m Booking


