<?php

echo '<!DOCTYPE html>
<html>
<head>';



echo '
</head>
<body>

<h1>build script react test</h1>

<div id="main"></div>

';

echo '
  <script src="MyBundle.js"></script>
';

// const Form = JSONSchemaForm.default;
echo '
<script type="text/babel">

const uiSchema = {};

const schema = {
  "title": "Test form",
  "type": "object",
  "properties": {
    "firstName": {
      "type": "string",
      "title": "First name"
    },
    "lastName": {
      "type": "string",
      "title": "Last name"
    }
  }
};

const formData = {
  "firstName": "Chuck",
  "lastName": "Norris"
};

function onSubmit(formData) { };

function onChange(formData) { };

ReactDOM.render((<Form onChange={onChange} onSubmit={onSubmit} uiSchema={uiSchema} schema={schema} formData={formData}></Form>),
    document.getElementById("main"));

</script>
';

echo '
</body>
</html>';

?>