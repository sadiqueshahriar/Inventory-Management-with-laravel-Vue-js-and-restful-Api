<template>
<div>
	<div class="wrapper bg">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-0 row-cols-xl-2">
					<div class="col mx-auto">

						<div class="card">
							<div class="card-body">
								<div class="border p-2 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <router-link to="/register">Sign up here</router-link>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="backend/assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									
									<div class="form-body">
										<form class="row g-3" @submit.prevent="login">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control"  placeholder="Email Address" v-model="form.email" 
												>
								<small class="text-danger" v-if="errors.email">{{errors.email[0]}}</small>
											</div>
											
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword"  placeholder="Enter Password" v-model="form.password">		
												</div>
											<small class="text-danger" v-if="errors.password">{{errors.password[0]}}</small>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	
												<router-link to="/forgot">Forgot Password ?</router-link>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
</div>
</template>


<script>
export default{
	created(){
		if(User.loggedIn()){
			this.$router.push({name:'home'})

		}

	},
	data(){
		return{
			form:{
				email:null,
				password:null
			},
			errors:{

			}
	
		}

	},
	methods: {
		login(){
			axios.post('https://inventorymanagements.herokuapp.com/api/auth/login',this.form)
			.then(res=>{
			User.responseAfterLogin(res)
				Toast.fire({
				icon: 'success',
				title: 'Signed in successfully'
				})
			this.$router.push({name:'home'})
					
			})
			.catch(
				Toast.fire({
				icon: 'warning',
				title: 'Invalid Email or Password'
				})				

			)
			.catch(error=>this.errors=error.response.data.errors)
		

		}
	}


}

</script>

<style scoped>
  
</style>
