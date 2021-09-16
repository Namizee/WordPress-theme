<?php


namespace kobzar;


class ConsultationForm
{
    private $errors = array();

    public function __construct()
    {
        add_action('wp_ajax_consultation_form_send', array($this, 'consultation_form_send'));
        add_action('wp_ajax_nopriv_consultation_form_send', array($this, 'consultation_form_send'));
    }

    public function consultation_form_send(){
        if (!empty($_POST)) {
            $data = $_POST;
            $json = array();

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validate($data)) {

                $message = '<html><body>';
                $message .= '<h1>Новая заявка с сайта Kobzar</h1><div style="padding: 0 20px;border: 1px solid #c2554f;border-radius: 5px;">';


                $message .= '<h3>Форма обратной связи</h3>';


                if (isset($data['user_name'])) {
                    $message .= '<p style="text-transform: uppercase;">Имя: <strong style="text-transform: capitalize;font-style: italic;">' . $this->sanitizeValue($data['user_name']) . '</strong></p>';
                }

                if (isset($data['user_phone'])) {
                    $message .= '<p style="text-transform: uppercase;">Телефон: <strong style="text-transform: capitalize;font-style: italic;">' . $this->sanitizeValue($data['user_phone']) . '</strong></p>';
                }

                if (isset($data['user_email']) && !empty($data['user_email'])) {
                    $message .= '<p style="text-transform: uppercase;">E-mail: <strong style="text-transform: capitalize;font-style: italic;">' . $this->sanitizeValue($data['user_email']) . '</strong></p>';
                }

                $message .= '</body></html>';

                $to = get_bloginfo('admin_email');

                $filter = array(
                    'to' => $to,
                    'subject' => 'Письмо с заявкой с сайта ' . get_bloginfo('name') . '.by',
                    'message' => $message,
                    'headers' => array(
                        'content-type: text/html;',
                    )
                );

                remove_all_filters('wp_mail_from');
                remove_all_filters('wp_mail_from_name');

                wp_mail($filter['to'], $filter['subject'], $filter['message'], $filter['headers']);

                return wp_send_json_success($json['success'], '200');

            } else {

                $json = $this->errors;
                return wp_send_json_error($json);

            }
        }
    }

    private function validate($data)
    {

        if (isset($data['user_email'])) {
            if ($data['user_email'] != ''){
                if (!preg_match('/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/', $data['user_email'])) {
                    $this->errors['user_email'] = 'Введите E-mail в правильном формате';
                }
            } else {
                $this->errors['user_email'] = 'Поле обязательно для заполнения';
            }
        }

        if (isset($data['user_phone'])) {
            if ($data['user_phone'] != ''){
                if (!preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){9,14}(\s*)?$/', $data['user_phone'])) {
                    $this->errors['user_phone'] = 'Некорректно введен номер телефона';
                }
            }
        }

        if (isset($data['user_name'])) {
            if ($data['user_name'] == ''){
                $this->errors['user_name'] = 'Введите ваше имя';
            }
        }

        return !$this->errors;
    }

    private function sanitizeValue($value)
    {
        // Удаляю теги
        $sanitizedValue = wp_strip_all_tags($value);

        // Удаляю табы, переводы, каретки, если есть
        $sanitizedValue = preg_replace('/[\r\n\t ]+/', ' ', $sanitizedValue);

        // Удаляю пробелы, так на всякий случай
        $sanitizedValue = trim($sanitizedValue);

        // Удаляю все лишние байты
        $found = false;
        while (preg_match('/%[a-f0-9]{2}/i', $sanitizedValue, $match)) {
            $sanitizedValue = str_replace($match[0], '', $sanitizedValue);
            $found = true;
        }

        if ($found) {
            $sanitizedValue = trim(preg_replace('/ +/', ' ', $sanitizedValue));
        }

        return $sanitizedValue;
    }

}
