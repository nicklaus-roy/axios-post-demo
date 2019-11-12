@extends('layouts.master')
@section('content')
	<div class="container" id ='app'>
		<div class="row">
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item">
						Tasks
						<button class="">Add Task</button>
					</li>
					<li class="list-group-item">
						<input type="text" v-model='new_task.title'>
						<button v-on:click='postNewTask'>Add</button>
					</li>
					<li class="list-group-item" v-for='task in tasks'>@{{ task.title }}</li>
				</ul>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script>
		var tasks = @json($tasks);
		var project = @json($project);
	</script>
	<script>
		var vm = new Vue({
			el:'#app',
			data:{
				tasks: tasks,
				project: project,
				new_task: {
					task_category_id: 1,
					title:'',
				}
			},
			methods: {
				postNewTask() {
					axios.post('/projects/'+this.project.id+'/tasks', this.new_task)
						.then(({data})=>{
							this.tasks.push(data);
							this.new_task.title = '';
							console.log(data);
						});
				}
			}
		});
	</script>
@endsection