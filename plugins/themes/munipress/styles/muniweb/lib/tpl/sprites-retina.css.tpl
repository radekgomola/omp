{{#sprites}}
@mixin sprite2x-{{name}}() {
	background: url('../img/bg/{{escaped_image}}') ({{offset_x}} / 2)+px ({{offset_y}} / 2)+px no-repeat;
	background-size: ({{width}} / 2)+px ({{height}} / 2)+px;
}
@mixin sprite2x-{{name}}-size() {
	@include sprite2x-{{name}}();
	width: ({{width}} / 2)+px;
	height: ({{height}} / 2)+px;
}
@mixin sprite2x-{{name}}-position() {
	background-position: ({{offset_x}} / 2)+px (-{{offset_y}} / 2)+px;
}
{{/sprites}}
