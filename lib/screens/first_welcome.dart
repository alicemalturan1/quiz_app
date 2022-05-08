import 'dart:convert';

import 'package:avoid_keyboard/avoid_keyboard.dart';
import 'package:category_picker/category_picker.dart';
import 'package:category_picker/category_picker_item.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:get_storage/get_storage.dart';
import 'package:quiz/controllers/user_controller.dart';
import 'package:quiz/screens/question.dart';
import 'package:websafe_svg/websafe_svg.dart';
import '../constants.dart';

var _controller = Get.put(UserController());
var _storage = GetStorage();
class FirstWelcomeScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {

    var _txtcontroller = TextEditingController();
    return Stack(
      fit: StackFit.expand,
      children:[

              WebsafeSvg.asset('assets/bg.svg',fit: BoxFit.fill ),
            Scaffold(
              backgroundColor: Colors.transparent,
              body:  AvoidKeyboard(
                child: Padding(
                  padding: const EdgeInsets.symmetric(horizontal: kDefaultPadding),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Spacer(flex: 2), //2/6
                      Text(
                        "Hadi Quiz Çözelim",
                        style:  Theme.of(context).textTheme.headline4?.copyWith(color:Colors.white ),
                      ),
                      SizedBox(height: 15,),
                      Text("Size hitap edebilmemiz için adınızı giriniz.",style: TextStyle(color: Colors.white),),
                      Spacer(), // 1/6

                      TextField(
                        controller:_txtcontroller ,
                        style: TextStyle(color: kSecondaryColor),
                        decoration: InputDecoration(
                          filled: true,
                          fillColor: Color(0xFF1C2341),

                          hintStyle: TextStyle(color: kSecondaryColor),
                          hintText: "Adınız",
                          border: OutlineInputBorder(
                            borderRadius: BorderRadius.all(Radius.circular(9)),
                          ),
                        ),
                      ),
                      Spacer(), // 1/6
                      InkWell(
                        onTap: (){

                          if(_txtcontroller.text.length>=2){

                            _controller.setName(_txtcontroller.text);

                          }
                        },
                        child: Container(
                          width: double.infinity,
                          alignment: Alignment.center,
                          padding: EdgeInsets.all(kDefaultPadding * 0.75), // 15
                          decoration: BoxDecoration(
                            gradient: kPrimaryGradient,
                            borderRadius: BorderRadius.all(Radius.circular(12)),
                          ),
                          child: Text(
                            "Başlayalım",
                            style: TextStyle(color: Colors.white),
                          ),
                        ),
                      ),
                      Spacer(flex: 2), // it will take 2/6 spaces
                    ],
                  ),
                ),
              ),
            )

          ],


    );
  }

}

class HomePage extends StatelessWidget {


  _makeCategories(item){
    List <CategoryPickerItem> rtn = [];
    int count = 0;
    for(dynamic x in item){
      if(count==0){
        _controller.setShowQuizs(x["quizs"]);
        count++;
      }
      rtn.add(CategoryPickerItem(value:x ,label:x["category"]["name"]));
    }

     return rtn;
  }

  @override
  Widget build(BuildContext context) {
    return  Stack(
      fit: StackFit.expand,
      children:[
        WebsafeSvg.asset('assets/bg.svg',fit: BoxFit.fill ),
        Scaffold(
          extendBodyBehindAppBar: true,
          resizeToAvoidBottomInset: false,
          appBar: AppBar(
            backgroundColor: Colors.transparent,
            elevation: 0,
            centerTitle: true,
            title: Text('Hoşgeldin, '+_controller.cname.value),
          ),
          backgroundColor: Colors.transparent,
          body: FutureBuilder(
                future: _controller.getData(),
                builder: (context,AsyncSnapshot snapshot){

                  if(snapshot.hasData){
                    List _items  = jsonDecode(snapshot.data.body);

                    return   SafeArea(
                      child: Padding(
                        padding: const EdgeInsets.symmetric(horizontal: kDefaultPadding/2),
                        child: Column(
                          crossAxisAlignment: CrossAxisAlignment.start,
                          children: [
                            CategoryPicker(
                              items:_makeCategories(_items),
                              onValueChanged: (value)=> _controller.show_quizs.value=value.value["quizs"],
                              unselectedItemTextLightThemeColor: Colors.white,
                              unselectedItemBorderColor: kSecondaryColor,

                            ),
                            SizedBox(height: kDefaultPadding/2,),

                            Flexible(flex: 1,
                                child: Obx(()=>ListView.builder(
                                  itemCount: _controller.show_quizs.value.length,
                                  itemBuilder: (context,index){
                                    return InkWell(
                                      onTap: ()=> Get.off(()=>QuestionScreen(id: _controller.show_quizs[index]["id"])),
                                      child: Container(
                                        margin: EdgeInsets.only(top: kDefaultPadding),
                                        padding: EdgeInsets.symmetric(horizontal: kDefaultPadding,vertical: kDefaultPadding*1.4),
                                        decoration: BoxDecoration(
                                            border:Border.all(color: kGrayColor),
                                            borderRadius:BorderRadius.circular(10),
                                            color: Colors.white
                                        ),
                                        child: Row(
                                          mainAxisAlignment: MainAxisAlignment.spaceBetween,
                                          children: [
                                            Container(
                                              width: 40,
                                              height: 40,
                                              child: Icon(CupertinoIcons.question),
                                              decoration: BoxDecoration(

                                                  border:Border.all(
                                                      color: kGrayColor
                                                  ),
                                                  borderRadius: BorderRadius.circular(10)

                                              ),

                                            ),
                                            SizedBox(
                                              width:MediaQuery.of(context).size.width/1.95 ,
                                              child:
                                              Column(
                                                crossAxisAlignment: CrossAxisAlignment.start,
                                                children: [
                                                  Text(_controller.show_quizs[index]["title"],style: TextStyle(color: kBlackColor,fontSize: 20),),
                                                  SizedBox(height: 7,),
                                                  Text(_controller.show_quizs[index]["description"],style: TextStyle(color: kGrayColor,fontSize: 14)),
                                                ],
                                              ),
                                            ),

                                            Container(
                                              width: 26,
                                              height: 26,
                                              child: Icon(CupertinoIcons.right_chevron),

                                            )
                                          ],
                                        ),
                                      ),
                                    );
                                  },
                                ))
                            )

                          ],
                        ),
                      ),
                    );
                  }
                  return Center(
                    child: CircularProgressIndicator(
                      backgroundColor: CupertinoColors.systemPink,
                      color: CupertinoColors.systemPurple,
                    ),
                  );
                }),
        ),
      ]
    );
  }
}