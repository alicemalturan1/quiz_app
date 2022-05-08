import 'dart:convert';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:quiz/component/progress_bar.dart';
import 'package:quiz/component/question_card.dart';
import 'package:quiz/constants.dart';
import 'package:quiz/controllers/question_controller.dart';
import 'package:websafe_svg/websafe_svg.dart';



class QuestionScreen extends StatelessWidget{
  int id;
  QuestionScreen({
    Key ?key,
    required this.id
  }
      ) : super(key: key);
  @override
  Widget build(BuildContext context) {

    QuestionController _questionController = Get.put(QuestionController());

    return  Scaffold(
      extendBodyBehindAppBar: true,

      appBar: AppBar(
        automaticallyImplyLeading: false,
        actions: [
          FlatButton(onPressed:_questionController.nextQuestion, child: Text("Atla",style: TextStyle(color: Colors.white),)),

        ],
        elevation: 0,
        backgroundColor: Colors.transparent,

      ),
      body: Stack(
        children: [
          WebsafeSvg.asset('assets/bg.svg',fit: BoxFit.fill,width: MediaQuery.of(context).size.width ),
          SafeArea(
            child: FutureBuilder(
              future: _questionController.getQuestions(this.id.toString()),
              builder: (context,AsyncSnapshot snapshot){
                if(snapshot.hasData){

                  List questions = jsonDecode(snapshot.data.body);
                  _questionController.question_length.value=questions.length;
                  _questionController.InitAnim();
                  return Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Padding(
                        padding: const EdgeInsets.symmetric(horizontal: kDefaultPadding),
                        child: ProgressBar(),
                      ),
                      Padding(
                        padding: const EdgeInsets.symmetric(horizontal: kDefaultPadding),
                        child: Obx(()=>Text.rich(
                            TextSpan(
                                text: "Soru "+_questionController.questionNumber.toString(),
                                style: Theme.of(context).textTheme.headline4?.copyWith(color:kSecondaryColor ),
                                children:[
                                  TextSpan(
                                      style: Theme.of(context).textTheme.headline5?.copyWith(color:kSecondaryColor ),
                                      text: "/"+questions.length.toString()
                                  )
                                ]
                            )
                        )),
                      ),
                      Divider(thickness: 1.5,),
                      SizedBox(height: kDefaultPadding,),
                      Expanded(
                        child: PageView.builder(

                            itemBuilder: (context, index)=>QuestionCard(
                              question:questions[index],
                            ),
                            itemCount: questions.length,
                            physics: NeverScrollableScrollPhysics(),
                            controller: _questionController.pageController,

                        ),

                      ),

                    ],
                  );
                }else{
                  return Center(
                    child: CircularProgressIndicator(
                      backgroundColor: CupertinoColors.systemPink,
                      color: CupertinoColors.systemPurple,
                    ),
                  );
                }

              },
            ),
          )
        ],
      ),
    );
  }

}