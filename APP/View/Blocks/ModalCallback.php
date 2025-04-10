
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Заказать звонок</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form id="phoneForm" action="" method="post" class="ajax_form af_example">

                    <div class="row">
                        <div class="col-12">
                            <label class="control-label " for="af_name">Ваше имя</label>
                            <div class="controls">
                                <input type="text" id="af_name" name="name2" value="" placeholder="" class="form-control" required="">
                                <span class="error_name"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="control-label " for="af_phone">Телефон</label>
                            <div class="controls">
                                <input  pattern="^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$"  data-mask="+7 (999) 999-99-99" type="tel" id="phone" name="phone" value="" placeholder="" class="form-control" required="">
                                <span class="error_phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-end">
                        <button  type="submit" class="btn btn_base">Отправить</button>
                    </div>

                    <input type="hidden" name="af_action" value="cf7d1da720b9bd2676bea895e2082f4c">
                </form>

            </div>

        </div>
    </div>
</div>

<script>
//    Код Семёна
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

    document.getElementById('phoneForm').addEventListener('submit', function (e) {
        const pattern = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/;
        if (!pattern.test(phoneInput.value)) {
            e.preventDefault();
            alert('Введите номер в формате: +7 (999) 999-99-99');
        }
    });
</script>