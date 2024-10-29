## نظام إدارة المهام اليومية - Laravel

نظرة عامة:

هذا هو نظام إدارة المهام اليومية الذي تم بناؤه باستخدام Laravel و Blade و Cron Jobs. يسمح النظام للمستخدمين بإضافة، تعديل، وحذف المهام، بالإضافة إلى وظيفة تلقائية لإرسال بريد إلكتروني يوميًا يحتوي على المهام المعلقة. 

الميزات:

- واجهة مستخدم مبنية باستخدام Blade
- إمكانية إضافة، تعديل، وحذف المهام
- تغيير حالة المهمة بين "Pending" و "Completed"
- إرسال بريد إلكتروني تلقائي يوميًا للمهام المعلقة
- مصادقة المستخدمين باستخدام Laravel Breeze

التثبيت:

1. قم بتنزيل المشروع من GitHub:
    
    git clone https://github.com/Hanen191010/task-manager2.git
    
2. انتقل إلى دليل المشروع:
    
    cd task-manager
    
3. قم بتثبيت الحزم:
    
    composer install
    
4. قم بتشغيل الهجرات:
    
    php artisan migrate
    php artisan db:seed
    
5. قم بتشغيل الخادم:
    
    php artisan serve
    

تشغيل Cron Job:

1. قم بفتح `crontab`:
    
    crontab -e
    
2. أضف السطر التالي:
    
    * * * * * php /path/to/your/project/artisan schedule:run >> /dev/null 2>&1
    

توثيق Laravel Breeze:

يمكنك العثور على مزيد من المعلومات حول Laravel Breeze في الوثائق الرسمية: [https://laravel.com/docs/9.x/breeze](https://laravel.com/docs/9.x/breeze)

ملفات المشروع:

- `app/Http/Controllers/TaskController.php`: تحكم لإدارة المهام
- `app/Models/Task.php`: موديل لتمثيل المهام
- `app/Console/Commands/SendPendingTasksEmail.php`: Command لإرسال بريد إلكتروني للمهام المعلقة
- `app/Mail/PendingTasksEmail.php`: بريد إلكتروني ليتم إرساله للمهام المعلقة
- `resources/views/tasks/`: ملفات Blade لواجهة المستخدم
- `resources/views/layouts/app.blade.php`: ملف Blade لواجهة المستخدم الرئيسية
- `resources/views/emails/`: ملفات Blade لبريد إلكتروني
