Домашечка:

Створити Blog на Advanced YII 2

1.Backend
-	Manager User
-	Manager Post	(Soft delete) 	wysiwyg
-	Dashboard
-	Category	Many to Many
-	Manager Comments		wysiwyg
-	RBAC

2.Frontend
-	Menu by Category   -	 Widget	 (soft delete\ Recurse)
-	List post
-	Comments	       -    wysiwyg
-	Registration \ Auth-
-	Create posts	   -    wysiwyg
-	Email registration -	SMTP \ API	http://mandrill.com/

3.CSS                  -    wrapbootstrap.com


Хід роботи:

1. Створено таблицю user та модель User.
2. Створено таблиці: role, status, user_type, gender, profile
3. Створено моделі: Role, Status, UserType, Gender, Profile
4. Створено хелпери: ValueHelpers, ValueHelpers