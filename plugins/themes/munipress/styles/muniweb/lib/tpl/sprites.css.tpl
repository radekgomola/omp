{{#sprites}}
@mixin sprite-{{name}}() {
	background: url('../img/bg/{{escaped_image}}') -{{offset_x}}px -{{offset_y}}px no-repeat;
}
@mixin sprite-{{name}}-size() {
	@include sprite-{{name}}();
	width: {{width}}px;
	height: {{height}}px;
}
@mixin sprite-{{name}}-position() {
	background-position: -{{offset_x}}px -{{offset_y}}px;
}
{{/sprites}}
