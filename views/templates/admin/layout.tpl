<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{% block title %}Default Title{% endblock %}</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            {% block header %}{% endblock %}
        </div>
        <div id="content">
            {% block content %}{% endblock %}
        </div>
        <div id="footer">
            {% block footer %}{% endblock %}
        </div>
    </div>
</body>
</html>
