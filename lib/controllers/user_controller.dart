import 'package:get/get.dart';
import 'package:get_storage/get_storage.dart';
import 'package:quiz/screens/first_welcome.dart';
import 'package:http/http.dart' as http;
import 'package:quiz/constants.dart';
var storage = GetStorage();
class UserController extends GetxController{
  var cname=" ".obs;

  RxList show_quizs=[].obs;
  @override
  void onInit() {

    super.onInit();
  }
  void setName(String name){
    cname.value=name;
    storage.write('user_name', name).then((value) =>Get.offAll(()=>HomePage()));
  }
  void setShowQuizs(List data){
    show_quizs.value=data;
  }
  Future getData()async{
    return await http.get(Uri.parse(api_host+"/api/getQuizsAndCategories"));
  }

}