<?php

/* @STCvisitor/Default/sendemail.php */
class __TwigTemplate_c2d6c82d4a0cbbf457bfc267e1b219d19d9e8fda538b07dbb4664abbc0991693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f037b1c54b7e1f3b535ad61efdcaced7dfa0015ac079a52a721c955f71576e89 = $this->env->getExtension("native_profiler");
        $__internal_f037b1c54b7e1f3b535ad61efdcaced7dfa0015ac079a52a721c955f71576e89->enter($__internal_f037b1c54b7e1f3b535ad61efdcaced7dfa0015ac079a52a721c955f71576e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@STCvisitor/Default/sendemail.php"));

        // line 1
        echo "<?php
\$name       = @trim(stripslashes(\$_POST['name']));
\$from       = @trim(stripslashes(\$_POST['email']));
\$subject    = @trim(stripslashes(\$_POST['subject']));
\$message    = @trim(stripslashes(\$_POST['message']));
\$to   \t\t= 'kachroudi.safa@gmail.com';//replace with your email

\$headers   = array();
\$headers[] = \"MIME-Version: 1.0\";
\$headers[] = \"Content-type: text/plain; charset=iso-8859-1\";
\$headers[] = \"From: {\$name} <{\$from}>\";
\$headers[] = \"Reply-To: <{\$from}>\";
\$headers[] = \"Subject: {\$subject}\";
\$headers[] = \"X-Mailer: PHP/\".phpversion();

mail(\$to, \$subject, \$message, \$headers);

die;
";
        
        $__internal_f037b1c54b7e1f3b535ad61efdcaced7dfa0015ac079a52a721c955f71576e89->leave($__internal_f037b1c54b7e1f3b535ad61efdcaced7dfa0015ac079a52a721c955f71576e89_prof);

    }

    public function getTemplateName()
    {
        return "@STCvisitor/Default/sendemail.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* $name       = @trim(stripslashes($_POST['name']));*/
/* $from       = @trim(stripslashes($_POST['email']));*/
/* $subject    = @trim(stripslashes($_POST['subject']));*/
/* $message    = @trim(stripslashes($_POST['message']));*/
/* $to   		= 'kachroudi.safa@gmail.com';//replace with your email*/
/* */
/* $headers   = array();*/
/* $headers[] = "MIME-Version: 1.0";*/
/* $headers[] = "Content-type: text/plain; charset=iso-8859-1";*/
/* $headers[] = "From: {$name} <{$from}>";*/
/* $headers[] = "Reply-To: <{$from}>";*/
/* $headers[] = "Subject: {$subject}";*/
/* $headers[] = "X-Mailer: PHP/".phpversion();*/
/* */
/* mail($to, $subject, $message, $headers);*/
/* */
/* die;*/
/* */
