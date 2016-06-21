




![ftp](/assets/ftp.png)

كيفية إدارة الملفات عبر FTP؟



لإدارة الملفات عبر FTP ستحتاج ثلاثة أمور:


1. اسم المستخدم

2. كلمة السر

3. عنوان ftp.example.com) FTP)


وبالطبع برنامج للتواصل عبر بروتوكول FTP: وليكن [filzella](http://filezilla.net/download) المجاني والشهير.



# إنشاء اتصال عبر FileZilla :


ستحتاج لإدخال جميع المعلومات مرة واحدة فقط في البرنامج وبعدها يمكنك الاتصال بضغطة واحدة . ولإنشاء اتصال اتبع الخطوات التالية :


1. افتح البرنامج

2. اضغط على file من القائمة ثم Site Manager

3. اضغط على New Site

4. في مربع Host اكتب عنوان ملقم ftp.example.com )FTP)

5. في مربع Logon Type اختر Normal

6. في مربع User أدخل اسم المستخدم الخاص بك

7. في مربع Password أدخل كلمة السر الخاصة بك

8. اضغط على زر OK


وبهذا تكون قد أنشأت معلومات الاتصال في برنامج FileZilla ، عندما تريد الاتصال فقط اذهب لـ file ثم Site Manager ستجد الاتصال الذي أنشأته محدد في القائمة ، اضغط في الأسفل على Connect


تبادل الملفات :



بعد الاتصال بنجاح بالاستضافة ستجد ملفات على اليسار وهم الملفات الموجودين على جهازك ، وملفات على اليمين وهم الملفات الموجودين في الموقع مباشرة ، باستخدام قائمتي الملفات على اليمين واليسار يمكنك تبادل الملفات ، فقط قم بسحب الملفات المراد رفعها للموقع من القائمة على اليسار إلى القائمة على اليمين ، وبالعكس اذا كنت تريد تحميل ملفات من الموقع لجهازك .


تأكد من رفعك الملفات داخل المجلد العام والمسمى غالباً htdocs لكي تظهر هذه الملفات على الموقع


ولا تنسى بأنه إذا كان لديك عدة عناوين في حسابك سواء عناوين مستقلة أو فرعية فيجب دائماً رفع الملفات للمجلد المناسب لكي تظهر الملفات على العنوان المطلوب


حذف ملفات :


1. اضغط باليمين على الملفات أو المجلدات المراد حذفها

2. اختر Delete


تغيير صلاحيات ملف/مجلد :


1. اضغط باليمين على الملف/المجلد

2. اختر File Permissions

3. من خلال المربع الظاهر اأدخل الصلاحيات الجديدة

4. اضغط على OK


تذكر دائماً عدم وضع صلاحيات أقل من 6XX وإلا سيحدث مشاكل ..





