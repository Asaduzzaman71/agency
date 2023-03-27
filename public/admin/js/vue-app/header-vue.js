const { createApp } = Vue

createApp({
    data() {
        return {
            showHeaderPopup: false,
            showModal: false,
        }
    },
}).mount('#app')