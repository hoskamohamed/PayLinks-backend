<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\SetupPage;
use Illuminate\Database\Seeder;

class SetupPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setup_pages = array(
            array('type' => 'setup-page','slug' => 'home','title' => '{"title":"Home"}','url' => '/','details' => NULL,'last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => NULL),
            array('type' => 'setup-page','slug' => 'about-us','title' => '{"title":"About Us"}','url' => '/about-us','details' => NULL,'last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => NULL),
            array('type' => 'setup-page','slug' => 'services','title' => '{"title":"Services"}','url' => 'services','details' => NULL,'last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => NULL),
            array('type' => 'setup-page','slug' => 'web-journal','title' => '{"title":"Web Journal"}','url' => 'web-journal','details' => NULL,'last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => NULL),
            array('type' => 'setup-page','slug' => 'contact-us','title' => '{"title":"Contact Us"}','url' => '/contact-us','details' => NULL,'last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => NULL),
            array('type' => 'useful-links','slug' => 'privacy-policy','title' => '{"language":{"en":{"title":"Privacy Policy"},"es":{"title":"Política de privacidad"}}}','url' => NULL,'details' => '{"language":{"en":{"details":"<h3 style=\\"margin-left:0px;\\"><strong>Privacy Policy for PayLink<\\/strong><\\/h3><p style=\\"margin-left:0px;\\"><strong>1. Introduction<\\/strong><\\/p><p style=\\"margin-left:0px;\\">Welcome to PayLink! This Privacy Policy outlines how we collect, use, and protect your personal information when you use our services.<\\/p><p style=\\"margin-left:0px;\\"><strong>2. Information We Collect<\\/strong><\\/p><p style=\\"margin-left:0px;\\">a. <strong>Personal Information:<\\/strong> We may collect personal information such as your name, email address, and contact details when you register for PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. <strong>Payment Information:<\\/strong> To facilitate transactions, we collect payment details, including credit card information.<\\/p><p style=\\"margin-left:0px;\\">c. <strong>Usage Data:<\\/strong> We may collect information about how you use PayLink, including your interactions with the platform and features.<\\/p><p style=\\"margin-left:0px;\\"><strong>3. How We Use Your Information<\\/strong><\\/p><p style=\\"margin-left:0px;\\">a. <strong>Transaction Processing:<\\/strong> We use your information to process payments, send invoices, and provide customer support.<\\/p><p style=\\"margin-left:0px;\\">b. <strong>Communication:<\\/strong> We may use your contact information to send important updates, notifications, and promotional materials.<\\/p><p style=\\"margin-left:0px;\\">c. <strong>Improvement of Services:<\\/strong> Your feedback and usage data help us enhance and optimize the PayLink experience.<\\/p><p style=\\"margin-left:0px;\\"><strong>4. Data Security<\\/strong><\\/p><p style=\\"margin-left:0px;\\">We implement industry-standard security measures to protect your information from unauthorized access, disclosure, alteration, and destruction.<\\/p><p style=\\"margin-left:0px;\\"><strong>5. Third-Party Services<\\/strong><\\/p><p style=\\"margin-left:0px;\\">We may use third-party services to enhance PayLink. These services have their own privacy policies, and we encourage you to review them.<\\/p><p style=\\"margin-left:0px;\\"><strong>6. Your Choices<\\/strong><\\/p><p style=\\"margin-left:0px;\\">You can update your account information and communication preferences at any time. You have the right to access, correct, or delete your personal information.<\\/p><p style=\\"margin-left:0px;\\"><strong>7. Changes to the Privacy Policy<\\/strong><\\/p><p style=\\"margin-left:0px;\\">We may update this Privacy Policy to reflect changes in our practices. We will notify you of any significant changes.<\\/p><p style=\\"margin-left:0px;\\"><strong>Terms and Conditions for PayLink<\\/strong><\\/p><h3 style=\\"margin-left:0px;\\"><strong>1. Acceptance of Terms<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">By using PayLink, you agree to comply with these Terms and Conditions. If you do not agree, please refrain from using our services.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>2. User Registration<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. You must provide accurate and complete information during the registration process.<\\/p><p style=\\"margin-left:0px;\\">b. You are responsible for maintaining the confidentiality of your account credentials.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>3. Payment Transactions<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. You agree to pay the specified fees for services provided by PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. PayLink is not responsible for any disputes or issues arising from transactions between users.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>4. Prohibited Conduct<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. You shall not engage in any unlawful or unauthorized activities on PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. You shall not attempt to interfere with the proper functioning of the platform.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>5. Termination of Account<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">We reserve the right to terminate or suspend your account if you violate these Terms and Conditions.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>6. Limitation of Liability<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">PayLink is not liable for any indirect, incidental, or consequential damages arising from the use of our services.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>7. Governing Law<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">These Terms and Conditions are governed by the laws .<\\/p><h3 style=\\"margin-left:0px;\\"><strong>Contact Information<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">If you have any questions or concerns about our Privacy Policy or Terms and Conditions, please contact us at <a href=\\"mailto:contact@email.com\\">contact@paylink.com<\\/a>.<\\/p>"},"es":{"details":"<h3 style=\\"margin-left:0px;\\"><strong>Pol\\u00edtica de Privacidad para PayLink<\\/strong><\\/h3><p style=\\"margin-left:0px;\\"><strong>1. Introducci\\u00f3n<\\/strong><\\/p><p style=\\"margin-left:0px;\\">\\u00a1Bienvenido a PayLink! Esta Pol\\u00edtica de Privacidad describe c\\u00f3mo recopilamos, utilizamos y protegemos su informaci\\u00f3n personal cuando utiliza nuestros servicios.<\\/p><p style=\\"margin-left:0px;\\"><strong>2. Informaci\\u00f3n que Recopilamos<\\/strong><\\/p><p style=\\"margin-left:0px;\\">a. <strong>Informaci\\u00f3n Personal:<\\/strong> Podemos recopilar informaci\\u00f3n personal como su nombre, direcci\\u00f3n de correo electr\\u00f3nico y detalles de contacto cuando se registra en PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. <strong>Informaci\\u00f3n de Pago:<\\/strong> Para facilitar transacciones, recopilamos detalles de pago, incluida informaci\\u00f3n de tarjetas de cr\\u00e9dito.<\\/p><p style=\\"margin-left:0px;\\">c. <strong>Datos de Uso:<\\/strong> Podemos recopilar informaci\\u00f3n sobre c\\u00f3mo utiliza PayLink, incluidas sus interacciones con la plataforma y sus funciones.<\\/p><p style=\\"margin-left:0px;\\"><strong>3. C\\u00f3mo Utilizamos su Informaci\\u00f3n<\\/strong><\\/p><p style=\\"margin-left:0px;\\">a. <strong>Procesamiento de Transacciones:<\\/strong> Utilizamos su informaci\\u00f3n para procesar pagos, enviar facturas y proporcionar soporte al cliente.<\\/p><p style=\\"margin-left:0px;\\">b. <strong>Comunicaci\\u00f3n:<\\/strong> Podemos utilizar su informaci\\u00f3n de contacto para enviar actualizaciones importantes, notificaciones y materiales promocionales.<\\/p><p style=\\"margin-left:0px;\\">c. <strong>Mejora de Servicios:<\\/strong> Sus comentarios y datos de uso nos ayudan a mejorar y optimizar la experiencia de PayLink.<\\/p><p style=\\"margin-left:0px;\\"><strong>4. Seguridad de Datos<\\/strong><\\/p><p style=\\"margin-left:0px;\\">Implementamos medidas de seguridad est\\u00e1ndar de la industria para proteger su informaci\\u00f3n contra accesos no autorizados, divulgaci\\u00f3n, alteraci\\u00f3n y destrucci\\u00f3n.<\\/p><p style=\\"margin-left:0px;\\"><strong>5. Servicios de Terceros<\\/strong><\\/p><p style=\\"margin-left:0px;\\">Podemos utilizar servicios de terceros para mejorar PayLink. Estos servicios tienen sus propias pol\\u00edticas de privacidad, y le animamos a revisarlas.<\\/p><p style=\\"margin-left:0px;\\"><strong>6. Sus Opciones<\\/strong><\\/p><p style=\\"margin-left:0px;\\">Puede actualizar la informaci\\u00f3n de su cuenta y las preferencias de comunicaci\\u00f3n en cualquier momento. Tiene derecho a acceder, corregir o eliminar su informaci\\u00f3n personal.<\\/p><p style=\\"margin-left:0px;\\"><strong>7. Cambios en la Pol\\u00edtica de Privacidad<\\/strong><\\/p><p style=\\"margin-left:0px;\\">Podemos actualizar esta Pol\\u00edtica de Privacidad para reflejar cambios en nuestras pr\\u00e1cticas. Le notificaremos cualquier cambio significativo.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>T\\u00e9rminos y Condiciones para PayLink<\\/strong><\\/h3><h3 style=\\"margin-left:0px;\\"><strong>1. Aceptaci\\u00f3n de T\\u00e9rminos<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">Al utilizar PayLink, acepta cumplir con estos T\\u00e9rminos y Condiciones. Si no est\\u00e1 de acuerdo, abst\\u00e9ngase de utilizar nuestros servicios.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>2. Registro de Usuario<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. Debe proporcionar informaci\\u00f3n precisa y completa durante el proceso de registro.<\\/p><p style=\\"margin-left:0px;\\">b. Es responsable de mantener la confidencialidad de sus credenciales de cuenta.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>3. Transacciones de Pago<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. Acepta pagar las tarifas especificadas por los servicios proporcionados por PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. PayLink no se hace responsable de disputas o problemas derivados de transacciones entre usuarios.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>4. Conducta Prohibida<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">a. No debe participar en actividades ilegales o no autorizadas en PayLink.<\\/p><p style=\\"margin-left:0px;\\">b. No debe intentar interferir con el correcto funcionamiento de la plataforma.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>5. Terminaci\\u00f3n de la Cuenta<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">Nos reservamos el derecho de terminar o suspender su cuenta si viola estos T\\u00e9rminos y Condiciones.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>6. Limitaci\\u00f3n de Responsabilidad<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">PayLink no se hace responsable de da\\u00f1os indirectos, incidentales o consecuentes derivados del uso de nuestros servicios.<\\/p><h3 style=\\"margin-left:0px;\\"><strong>7. Ley Aplicable<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">Estos T\\u00e9rminos y Condiciones se rigen por las leyes de [su jurisdicci\\u00f3n].<\\/p><h3 style=\\"margin-left:0px;\\"><strong>Informaci\\u00f3n de Contacto<\\/strong><\\/h3><p style=\\"margin-left:0px;\\">Si tiene alguna pregunta o inquietud sobre nuestra Pol\\u00edtica de Privacidad o T\\u00e9rminos y Condiciones, cont\\u00e1ctenos en <a href=\\"mailto:contacto@email.com\\">contacto@paylink.com<\\/a>.<\\/p>"}}}','last_edit_by' => '1','status' => '1','created_at' => '2023-08-19 12:50:32','updated_at' => '2023-11-14 11:48:16')
          );

        SetupPage::insert($setup_pages);

    }
}