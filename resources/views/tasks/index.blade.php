@extends('layouts.master')
@section('content')
	<div class="container" id ='app'>
		<div class="row">
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item">
						To Do
						<button class="">Add To Do</button>
					</li>
					<li class="list-group-item">
						<input type="text" v-model='new_task.title'>
						<button>Add</button>
					</li>
					<li class="list-group-item" v-for='task in toDo'>@{{ task.title }}</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item">
						Doing
						<button class="">Add Doing</button>
					</li>
					<li class="list-group-item">
						<input type="text" v-model='new_task.title'>
						<button>Add</button>
					</li>
					<li class="list-group-item" v-for='task in doing'>@{{ task.title }}</li>
				</ul>				
			</div>
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item">
						Done
						<button class="">Add Done</button>
					</li>
					<li class="list-group-item">
						<input type="text" v-model='new_task.title'>
						<button>Add</button>
					</li>
					<li class="list-group-item" v-for='task in done'>@{{ task.title }}</li>
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
					task_category_id: '',
					title:'',
					project_id: project.id
				}
			},
			computed:{
				toDo() {
					return this.tasks.filter(task => {
						return task.task_category_id == 1
					});
				},
				doing(){
					return this.tasks.filter(task => {
						return task.task_category_id == 2
					});
				},
				done(){
					return this.tasks.filter(task => {
						return task.task_category_id == 3
					});
				}
			}
		});
	</script>
@endsection