<template>
    <li class="l-section section">
        <div class="hire">
            <h2>{{ messageHeaderText }}</h2>

            <form class="__message" @submit.prevent="sendMessage">

                <div class="__message_input">
                    <input :class=" this.nameL ? 'has-value' : '' " id="name" type="text" spellcheck="false" v-model="message.name" @keyup="textInput">
                    <label for="name">Name</label>
                </div>
                <div class="__message_input">
                    <input :class=" this.emailL ? 'has-value' : '' " id="email" type="email" spellcheck="false" v-model="message.email" @keyup="textInput">
                    <label for="email">Email</label>
                </div>

                <div class="__message_input __textarea">
                    <textarea :class=" this.messageL ? 'has-value' : '' " name="message" id="message" v-model="message.message" @keyup="textInput"></textarea>
                    <label for="email">Message</label>
                </div>

                <button type="submit" class="myBtn">
                    <span>Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 483.049 483.049" xml:space="preserve">
                        <g>
                            <polygon style="fill:#005ECE;" points="121.155,241.524 121.155,483.049 361.894,241.524  "/>
                            <polygon style="fill:#2488FF;" points="121.155,0 121.155,241.524 361.894,241.524  "/>
                        </g>
                    </svg>
                </button>


            </form>
        </div>
    </li>
</template>

<script>
export default {
    data () {
        return {
            nameL:false,
            emailL: false,
            messageL: false,
            message: { name:"", email:"", message:"" },
            sendingState: false,
            messageHeaderText : "Message Me"
        }
    },
  methods: {
    sendMessage: function sendMessage() {
        let animate = document.querySelector('#__animate')
        if ( !this.sendingState ){
            this.sendingState = true;

            animate.innerHTML = `<div class="__animate"> <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> </div>`

            axiosInstance.post('/emailp',this.message)
            .then( () => {
                this.message = {
                    name : "",
                    email: "",
                    message: "",
                }

                this.sendingState = false;
                animate.innerHTML = ""
                this.messageHeaderText = "Your message has been sent!"
                setInterval(() => {
                    this.messageHeaderText = 'Message Me'
                }, 5000);
            })
            .catch( (error) => {
                console.log(error)
                this.sendingState = false;
                animate.innerHTML = ""
            })
        }
    },
    textInput: function(){
        if ( (this.message.name).length != 0 ){
            this.nameL = true
        }else { this.nameL = false }

        if ( (this.message.email).length != 0 ){
            this.emailL = true
        }else { this.emailL = false }

        if ( (this.message.message).length != 0 ){
            this.messageL = true
        }else { this.messageL = false }
    }
  },


}
</script>
