const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            baseURL: '',
            showModal: false,
            showHeaderPopup: false,
            updateMode: false,
            errors: null,
            showDr1: false,
            tempVal: null,
            filterText: null,
            companies: null,
            formPostData: {
                tracking_id: null,
                company_id: null,
                email: null,
                from_address: null,
                delivery_address: null,
                routes: [],
                old_routes: [],
                current_location:null,
                image: null,
                image_url: null,
                document: null,
                delivered_at: '',
                status: 1,
            },
            commonLocations:['From Address', 'Delivery Address'],
            old_routes: [],
            routes_of_order: [],
            currentData:null,
            status:[
                {
                    id: 1,
                    name:'pending',
                },
                {
                    id: 2,
                    name: 'processing',
                },
                {
                    id: 3,
                    name: 'ongoing',
                },
                {
                    id: 4,
                    name: 'delivered',
                },
                {
                    id: 5,
                    name: 'received',
                }
            ]

        }
    },
    methods: {
        clone: function(data){
            return JSON.parse(JSON.stringify(data))
        },
        lower: function(text){
            return (text || '').toLowerCase()
        },
        addRoute: function(){
            if (this.tempVal){
                this.formPostData.routes.push(this.tempVal)
                this.tempVal = null
            }
        },
        removeRoute: function(index){
            this.formPostData.routes.splice(index, 1)
        },
        removeRouteFromDb: function (id,index) {
            axios.get('/admin/routes/' +id ).then((response) => {
                this.formPostData.routes.splice(index, 1)
            }).catch((error) => {
                console.log('error >>>', error);
            })
            this.old_routes.splice(index, 1)
        },
        createOrder() {
            let formData = new FormData();
            formData.append('tracking_id', this.formPostData.tracking_id);
            formData.append('company_id', this.formPostData.company_id);
            formData.append('email', this.formPostData.email);
            formData.append('from_address', this.formPostData.from_address);
            formData.append('delivery_address', this.formPostData.delivery_address);
            formData.append('routes', JSON.stringify(this.formPostData.routes));
            formData.append('current_location', this.formPostData.current_location);
            if (this.formPostData.image) formData.append('image', this.formPostData.image);
            if (this.formPostData.document) formData.append('document', this.formPostData.document);
            formData.append('delivered_at', this.formPostData.delivered_at);
            formData.append('status', this.formPostData.status);
            axios.post('/admin/orders', formData).then((response) => {
                // if(response.data.status)
                console.log(response);
                let url = '/admin/orders';
                window.location = url; 
            }).catch((error) => {
                if (error.response.status == 400) {
                    this.errors = error.response.data.error;
                }
              
            })
           
        },
        updateOrder() {
            let formData = new FormData();
            formData.append('tracking_id', this.formPostData.tracking_id);
            formData.append('company_id', this.formPostData.company_id);
            formData.append('email', this.formPostData.email);
            formData.append('from_address', this.formPostData.from_address);
            formData.append('delivery_address', this.formPostData.delivery_address);
            formData.append('routes', JSON.stringify(this.formPostData.routes));
            formData.append('old_routes', JSON.stringify(this.formPostData.old_routes));
            formData.append('current_location', this.formPostData.current_location);
            if (this.formPostData.image) formData.append('image', this.formPostData.image);
            if (this.formPostData.document) formData.append('document', this.formPostData.document);
            formData.append('delivered_at', this.formPostData.delivered_at);
            formData.append('status', this.formPostData.status);
            let currentRouteArray = window.location.pathname.split('/');
            axios.post('/admin/order-update/' + currentRouteArray[3], formData).then((response) => {
                // if(response.data.status)
                console.log(response);
                let url = '/admin/orders';
                window.location = url; 
            }).catch((error) => {
                console.log(error);
                if (error.response.status == 400) {
                    this.errors = error.response.data.errors;
                }
                else if (error.response.status == 401) {
                    this.unauthorized = true;
                    this.errors = error.response.data.error;
                }
            })
           
        },
        onImageChange(event) {
            const selectedFiles = event.target.files;
            this.formPostData.image = selectedFiles[0];
        },
        onFileChange(event) {
            const selectedFiles = event.target.files;
            this.formPostData.document = selectedFiles[0];
        },
        removeRoute(index) {
            if (this.updateMode){
                console.log('here', this.routes_of_order.length, index);
                if(this.routes_of_order.length >= index){
                    let id = this.routes_of_order[index]?.id || false
                    if (id){
                        this.formPostData.routes.splice(index, 1)
                        this.routes_of_order.splice(index, 1)
                        this.formPostData.old_routes.push(id)
                    }else{
                        this.formPostData.routes.splice(index, 1)
                    }
                }
            }else{
                this.formPostData.routes.splice(index, 1)
            }
        },
    },
    created() {
        axios.get('/admin/waypoints').then((response) => {
            let routes = response.data.routes || []
            if(routes?.length){
                routes.forEach(route => {
                    if(!this.old_routes.map(i => i.name).includes(route.name)){
                        this.old_routes.push(route)
                    }
                })
            }
        }).catch((error) => {
            this.errors = error.response.data.error;
        })
        axios.get('/admin/company-list').then((response) => {
            this.companies = response.data.companies
        }).catch((error) => {
            this.errors = error.response.data.error;
        })
        let currentRouteArray = window.location.pathname.split('/');
        this.baseURL = window.location.origin
        if (currentRouteArray[4] == 'edit'){
            this.updateMode = true
            axios.get('/admin/orders/' + currentRouteArray[3]).then((response) => {
                let data = response.data.order
                this.formPostData.tracking_id = data.tracking_id
                this.formPostData.company_id = data.company_id
                this.formPostData.email = data.email
                this.formPostData.from_address = data.from_address
                this.formPostData.delivery_address = data.delivery_address
                this.routes_of_order = this.clone(data.routes)
                this.formPostData.routes = data.routes.map(i => i.name)
                this.formPostData.current_location = data.current_location
                this.formPostData.image_url = data.image
                this.formPostData.document = data.document
                this.formPostData.delivered_at = data.delivered_at || ''
                this.formPostData.status = data.status
            }).catch((error) => {
                this.errors = error.response.data.errors;
            })
        }
        window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest', //application/json
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
        
    }
}).mount('#app')