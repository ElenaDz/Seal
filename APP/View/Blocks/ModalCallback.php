
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Заказать звонок</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form id="phoneForm" action="<?= \APP\Action\SendOrder::getUrl(); ?>" method="post" class="ajax_form af_example">

                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="controls">
                                <input type="text" id="af_name" name="name" value="" placeholder="Ваше имя" class="form-control" required="">
                                <span class="error_name"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="controls">
                                <input
                                    pattern="^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$"
                                    data-mask=" (999) 999-99-99"
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="+7"
                                    placeholder="Телефон"
                                    class="form-control"
                                    required
                                >
                                <span class="error_phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-end mb-3">
                        <button  type="submit" class="btn btn_base">Оставить заявку</button>

                    </div>

                    <label class="additional_info" for="152fz">
                        <input
                                id='152fz'
                                type="checkbox"
                                value=""
                                checked
                                required
                        >
                        Нажимая на кнопку «Отправить» Вы даёте согласие на обработку персональных данных
                        <small class="m-0" style="font-size: 13px">
                           (в соответствии со статьей 9 ФЗ от 27 июля 2006 г. № 152 ФЗ «О персональных данных»)
                        </small>
                    </label>

                    <input type="hidden" name="af_action" value="cf7d1da720b9bd2676bea895e2082f4c">
                </form>
                <div id="response" role="alert">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', () => {
        let numbers = phoneInput.value.replace(/\D/g, '');

        if (numbers.startsWith('8')) {
            numbers = '7' + numbers.slice(1);
        }

        if (numbers.length > 11) {
            numbers = numbers.slice(0, 11);
        }

        let formatted = '+7';

        if (numbers.length > 1) {
            formatted += ' (' + numbers.slice(1, 4);
        }
        if (numbers.length >= 4) {
            formatted += ') ' + numbers.slice(4, 7);
        }
        if (numbers.length >= 7) {
            formatted += '-' + numbers.slice(7, 9);
        }
        if (numbers.length >= 9) {
            formatted += '-' + numbers.slice(9, 11);
        }

        phoneInput.value = formatted;
    });

    document.getElementById('phoneForm').addEventListener('submit', function (e)
    {
        const pattern = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/;
        if ( ! pattern.test(phoneInput.value)) {
            e.preventDefault();
            alert('Введите номер в формате: +7 (999) 999-99-99');
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#phoneForm').on('submit', function(e) {
            e.preventDefault(); // Отключаем стандартную отправку

            const $form = $(this);
            const url = $form.attr('action');
            const method = $form.attr('method') || 'POST'; // по умолчанию POST

            $.ajax({
                url: url,
                type: method,
                data: $form.serialize(),
                success: function(response) {
                    $form.hide()
                    $('#response').addClass('alert alert-success')
                    $('#response').html('<p>Успешно отправлено!</p><p>' + response + '</p>');
                },
                error: function(xhr, status, error) {
                    $form.hide()
                    $('#response').addClass('alert alert-danger')
                    $('#response').html(
                        '<p>' +
                        'Не удалось сделать заявку на звонок, попробуйте позвонить по телефону или  написать на почту' +
                        '</p>');
                }
            });
        return false
        });
    });
</script>