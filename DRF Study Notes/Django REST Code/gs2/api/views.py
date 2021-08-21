from django.shortcuts import render
import io
from rest_framework.parsers import JSONParser
from .serializers import StudentSerializer
from rest_framework.renderers import JSONRenderer
from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt


@csrf_exempt
def student_create(request):
    if request.method == 'POST':
        json_data = request.body #b'{"name": "Sonam", "roll": 101, "city": "Ranchi"}'
        stream = io.BytesIO(json_data) #<_io.BytesIO object at 0x00000267585FBD10>
        pythondata = JSONParser().parse(stream) #{'name': 'Sonam', 'roll': 101, 'city': 'Ranchi'}
        serializer = StudentSerializer(data=pythondata)  #StudentSerializer(data={'name': 'Sonam', 'roll': 101, 'city': 'Ranchi'}):
                                                                    #name = CharField(max_length=100)
                                                                    #roll = IntegerField()
                                                                    #city = CharField(max_length=100)
         
        if serializer.is_valid():
            serializer.save()
            res = {'msg': 'Data Created'}
            json_data = JSONRenderer().render(res)
            return HttpResponse(json_data, content_type='application/json')
        json_data = JSONRenderer().render(serializer.errors)
        return HttpResponse(json_data, content_type='application/json')
