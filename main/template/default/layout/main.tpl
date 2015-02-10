{% block header %}
{% include template ~ "/layout/main_header.tpl" %}
{% endblock %}

{% block body %}
	{% if show_sniff == 1 %}
	 	{% include template ~ "/layout/sniff.tpl" %}
	{% endif %}
{% endblock %}

{% block footer %}
    {#  Footer  #}
    {% if show_footer == true %}
        </div> <!-- end of #row" -->
        </div> <!-- end of #main" -->
        <div class="push"></div>
        </div> <!-- end of #page section -->
        </div> <!-- end of #wrapper section -->
    {% endif %}
    {% include template ~ "/layout/main_footer.tpl" %}
{% endblock %}