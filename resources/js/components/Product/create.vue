<template>
 <div>
				<div class="page-breadcrumb d-none d-sm-flex align-items-center">
					<div class="ms-auto">
						<div class="btn-group">
                 <router-link to="/product" class="btn btn-primary button">All Product</router-link>
						</div>

					</div>
				</div>

    
   			<div class="row">
					<div class="col-xl-10 mx-auto">
						<h6 class="mb-0 text-uppercase">Product Information</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Add Product</h5>
								</div>
								<hr>
								<form class="row g-3" enctype="multipart/form-data" @submit.prevent="save">
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Product Name</label>
										<input type="text" class="form-control" id="inputFirstName" v-model="form.product_name">
										<small class="text-danger" v-if="errors.product_name">{{errors.product_name[0]}}</small>
									</div>
									<div class="col-md-6">
										<label for="inputLastName" class="form-label">Product Code</label>
										<input type="text" class="form-control" id="inputLastName" v-model="form.product_code ">
										<small class="text-danger" v-if="errors.product_code">{{errors.product_code[0]}}</small>
									</div>
									<div class="col-md-6">
                                        <label class="form-label">Product Category</label>
										<select class="single-select form-control" v-model="form.category_id">
								<option :value="category.id" v-for="category in categories" :key="category.id">{{ category.category_name }}</option>
								<small class="text-danger" v-if="errors.category_name">{{errors.category_name[0]}}</small>
	
                                    	</select>									
									
									</div>
									<div class="col-md-6">
                                       <label class="form-label">Product Supplier</label>
										<select class="single-select form-control" v-model="form.supplier_id ">
										<option :value="supplier.id" v-for="supplier in Suppliers" :key="supplier.id">{{ supplier.name }}</option>
										<small class="text-danger" v-if="errors.supplier_id">{{errors.supplier_id[0]}}</small>

                                    	</select>											
									</div>
 									<div class="col-md-4">
										<label for="inputSalary" class="form-label">Product Root</label>
										<input type="text" class="form-control" id="inputSalary" v-model="form.root ">
										<small class="text-danger" v-if="errors.root">{{errors.root[0]}}</small>									
									</div> 
    								<div class="col-md-4">
										<label for="inputSalary" class="form-label">Buying Price</label>
										<input type="text" class="form-control" id="inputSalary" v-model="form.buying_price">
										<small class="text-danger" v-if="errors.buying_price">{{errors.buying_price[0]}}</small>	
									</div> 
                        			<div class="col-md-4">
										<label for="inputSalary" class="form-label">Selling Price</label>
										<input type="text" class="form-control" id="inputSalary" v-model="form.selling_price ">
										<small class="text-danger" v-if="errors.selling_price">{{errors.selling_price[0]}}</small>	
									</div> 

 									<div class="col-md-6">
										<label for="inputSalary" class="form-label">Buying Date</label>
										<input type="date" class="form-control" id="inputSalary" v-model="form.buying_date">
										<small class="text-danger" v-if="errors.buying_date">{{errors.buying_date[0]}}</small>

                                     </div>
                                		<div class="col-md-6">
										<label for="inputSalary" class="form-label">Product Quantity</label>
										<input type="text" class="form-control" id="inputSalary" v-model="form.product_quantity">
										<small class="text-danger" v-if="errors.product_quantity">{{errors.product_quantity[0]}}</small>
                                     </div>

 									<div class="col-12">	
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile" @change="fileSlected">		
									</div>                                   
 									<div class="col-12">	
                                         <img :src="form.image" style="height:40px; width:40px">
										 <small class="text-danger" v-if="errors.image">{{errors.image[0]}}</small>
									</div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary px-5" >Submit</button>
									</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
    </div>
</template>
<script>

export default {
    created(){
		if(!User.loggedIn()){
			this.$router.push({name:'/'})
		}
	},
	data(){
		
		return{
			form:{
				category_id :"",
				product_name :"",
				product_code:"",
				root :"",
				buying_price:"",
				selling_price:"",
				supplier_id:"",
				buying_date:"",
				image:"",
				product_quantity:""
			},
            categories:[],
            Suppliers:[],
			errors:{}
	
		}

		

	},
	
	methods: {
        fileSlected(event){
            let file=event.target.files[0];
            if(file.size>1048770){
                Notification.imageValidation()
            }
            else{
                let reader=new FileReader();
                reader.onload=event=>{
                    this.form.image=event.target.result
                    console.log(event.target.result);
                };
                reader.readAsDataURL(file);
            }
        },
        save(){
						
		    axios.post('https://inventorymanagements.herokuapp.com/api/product',this.form)
			.then(()=>{
			
			 this.$router.push({name:'product'})
             Notification.success()

			})
			.catch(error=>this.errors=error.response.data.errors)

        }
		
	},
    created(){
        axios.get('https://inventorymanagements.herokuapp.com/api/category')
			 .then(({data})=>(this.categories=data))		
			.catch()

        axios.get('https://inventorymanagements.herokuapp.com/api/supplier')
			 .then(({data})=>(this.Suppliers=data))		
			 .catch()

    }


    
}
</script>

<style>
    
    .button{
        margin-right: 90px;
        margin-top: 26px;
    }
</style>