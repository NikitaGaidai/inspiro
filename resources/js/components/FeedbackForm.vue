<template>
    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
        <h4>{{ title }}</h4>

        <form id="form-contact" class="form clearfix">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="form-contact-name" :class="{'text-danger' : errors.name}">Ваше имя <span v-if="errors.name">({{errors.name.message}})</span></label>
                        <input type="text" v-model="name" class="form-control" :class="{'is-invalid' : errors.name}" id="form-contact-name" name="name" placeholder="Иван" required>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-6 col-sm-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="form-contact-email" :class="{'text-danger' : errors.email}">Электронная почта <span v-if="errors.email">({{errors.email.message}})</span></label>
                        <input type="email" v-model="email" class="form-control" :class="{'is-invalid' : errors.email}" id="form-contact-email" name="email" placeholder="mail@domain.ru" required>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-6 col-sm-6 -->
            </div>
            <!--end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form-contact-message" :class="{'text-danger' : errors.message}">Сообщение <span v-if="errors.message">({{errors.message.message}})</span></label>
                        <textarea class="form-control" :class="{'is-invalid' : errors.message}" v-model="message" id="form-contact-message" rows="8" name="message" placeholder="Введите текст сообщения..." required></textarea>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-12 -->
            </div>
            <!--end row -->
            <div class="form-group clearfix">
                <button type="button" class="btn pull-right btn-default" @click="sendFeedback">Отправить сообщение</button>
            </div>
            <!--end form-group -->
            <div class="form-contact-status"></div>
        </form>
        <!--end form-contact -->
    </div>
</template>

<script>
    export default {
        props: ['title', 'action', 'sound'],
        data () {
            return {
                errors: [],
                token: this.$csrf,
                name: null,
                email: null,
                message: null
            }
        },
        methods: {
            checkForm() {
                this.errors = [];

                if(this.name && this.email && this.message)
                    return true;

                if(!this.name)
                    this.errors['name'] = {field: 'name', message: 'Имя должно быть указано!'};

                if(!this.email)
                    this.errors['email'] = {field: 'email', message: 'Укажите почту!'};

                if(!this.message)
                    this.errors['message'] = {field: 'message', message: 'Оставьте сообщение!'};

                return false;
            },
            sendFeedback() {
                if(this.checkForm()) {

                    // Отправка данных
                    axios
                        .post(this.action, {
                            _token: this.token,
                            name: this.name,
                            email: this.email,
                            message: this.message
                        }).then(response => {
                            this.showNotification('Ваше обращение зарегистрировано!', 'success', this.sound);
                            this.clearForm();
                        }).catch(error => {
                            this.showNotification('Произошла ошибка!', 'error', this.sound);
                        });

                }
            },
            clearForm() {
                this.name = null;
                this.email = null;
                this.message = null;
            },
            showNotification(text, type, sound) {
                new Noty({
                    text: text,
                    type: type,
                    timeout: 3000,
                }).on('onShow', function () {
                    let audio = new Audio();
                    audio.src = sound;
                    audio.autoplay = true;
                }).show();
            }
        }
    }
</script>
