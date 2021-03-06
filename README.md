# Project Name - Projectwebtech-final-monfin

# สมาชิกในกลุ่ม
| รหัสนิสิต  | ชื่อ  | github username |
| ------------ | ------------ | ------------ | 
| 6010450012 | นาย กรกช ไตรวิเชียร | korrakot1396 |
| 6010450381 | นาย นิพัทธ์ ปาลสินกุลกิจ | nipathm |

## ขั้นตอนการติดตั้งโปรเจค
1. clone โปรเจคมาจาก github โดยนำไปไว้ที่ folder ที่เก็บ laragon/www 
2. เปิดโปรแกรม laragon แล้วไปที่ terminal
3. Run คำสั่ง composer install
4. Run คำสั่ง composer dump-autoload
5. Run คำสั่ง cp .env.example .env

## ตั้งค่าไฟล์ .env
##DB Data

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=monfin

DB_USERNAME=korrakot1396

DB_PASSWORD=korrakot1396

## หลังจาก ตั้งค่าไฟล์ .env เสร็จสิ้น

6. Run คำสั่ง php artisan key:generate

หลังจากตั้งค่าไฟล์ .env เสร็จแล้วให้ไปสร้าง Database ใน laragon โดยทำการ Start MySql และทำการสร้าง database และกำหนด
DB_DATABASE=monfin,DB_USERNAME=korrakot1396,DB_PASSWORD=korrakot1396 ให้ตรงตามไฟล์ .env 

8. หลังจากสร้าง database แล้วให้เข้าไปที่ terminate 
9. Run คำสั่ง php artisan migrate --seed
10. Run คำสั่ง php artisan serve 
11. หน้าเว็บพร้อมใช่งาน ตาม url ที่ได้จากการใช้คำสั่ง php artisan serve 

# Username และ Password ในการใช้งาน (สามารถสมัครใช้งานได้จากหน้าเว็บ)
ซึ่งในตัวโปรเจคได้ทำการเขียน Middleware เพื่อเช็คสถานะของผู้ที่ login เข้ามาว่า เป็น ADMIN หรือ USER เพื่อจำกัดสิทธิ์ของผู้ใช้งาน และเพื่อไม่ให้ข้ามสิทธิ์การใช้งานของกันและกันโดยแยกระหว่าง ADMIN กับ USER อย่างชัดเจน 
# ข้อมูลที่ใช้ทดสอบในการ Login เข้าระบบ
| Role  | Email  | Password |
| ------------ | ------------ | ------------ |
| ADMIN | admin@hotmail.com | 123456789 |
| USER1 | korrakot.tr@ku.th | 123456789 |
| USER2 | nipath.p@ku.th | 123456789 |

## การทำงานของระบบ
`ADMIN` 
- สามารถแก้ไขข้อมูลตนเองได้ สามารถเปลี่ยนรูปได้ รวมถึง เปลี่ยนรหัสผ่าน
- ดูภาพรวมระบบได้ อาทิเช่น จำนวน User ว่ามีกี่คน, ข้อมูลการจองทั้งหมด, ข้อมูลการชำระเงินทั้งหมด, ข้อมูลรีวิวที่พักทั้งหมด
- จัดการอัพเดทสถานะของ USER ที่จองห้องพักได้ ว่าชำระเงิน หรือยังไม่ได้ชำระเงิน
- จัดการอัพเดทสถานะของหลักฐาน ที่ USER อัพโหลดมา ว่าเป็น หลักฐานการชำระเงินถูกต้อง,ไม่ถูกต้อง หรือยังไม่ได้อัพโหลดหลักฐาน
- ออกรายงานการจองที่พักได้ และสามารถพิมพ์รายงานเป็นไฟล์ PDF 
- สามารถลบรีวิวของผู้ใช้ได้ หากรีวิวนั้นไม่เหมาะสม

`User` 
- ผู้ใช้สามารถจองห้องพักได้ โดยการค้นหาที่พักตามวันที่
- ผู้ใช้สามารถเขียนรีวิวที่พักได้ รวมถึงแก้ไขรีวิว อัพโหลดรูปภาพ และลบรีวิวของตนเอง
- ผู้ใช้สามารถแก้ไขข้อมูลตนเองได้ สามารถเปลี่ยนรูปได้ รวมถึง เปลี่ยนรหัสผ่าน
- ผู้ใช้สามารถอัพโหลดหลักฐานการชำระเงินได้



