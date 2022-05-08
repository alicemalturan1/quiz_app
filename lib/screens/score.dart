import 'package:quiz/screens/first_welcome.dart';
import '../constants.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:lottie/lottie.dart';
import 'package:quiz/controllers/question_controller.dart';
import 'package:websafe_svg/websafe_svg.dart';



class ScoreScreen extends StatelessWidget{
  int score;
  int max;
  ScoreScreen({
    Key ?key,
    required this.score,
    required this.max,
  }
      ) : super(key: key);
  @override
  Widget build(BuildContext context) {

    QuestionController _questionController = Get.put(QuestionController());

    return Scaffold(
      extendBodyBehindAppBar: true,


      body: Stack(
        children: [
          WebsafeSvg.asset('assets/bg.svg',fit: BoxFit.fill,width: MediaQuery.of(context).size.width),
          SafeArea(
            child: Padding(
              padding: const EdgeInsets.all(8.0),
              child: Column(
                children: [
                 Center(
                   child:  Lottie.asset(
                     'assets/success.json',
                     width: MediaQuery.of(context).size.width/2,
                     height: MediaQuery.of(context).size.width/2,
                     fit: BoxFit.fill,
                   ),
                 ),
                  SizedBox(height: 30,),// 1/6
                  Text(
                    "Tebrikler",
                    style:  Theme.of(context).textTheme.headline4?.copyWith(color:Colors.white ),
                  ),

                  Spacer(flex: 1),
                  Text(
                    "Skorunuz : "+this.score.toString()+" / "+this.max.toString(),
                    style:  Theme.of(context).textTheme.headline5?.copyWith(color:Colors.white ),
                  ),
                  Spacer(flex: 2),
                  InkWell(
                    onTap: (){Get.clearRouteTree(); Get.offAll(()=>HomePage());},
                    child: Container(
                      width: double.infinity,
                      alignment: Alignment.center,
                      padding: EdgeInsets.all(kDefaultPadding * 0.75), // 15
                      decoration: BoxDecoration(
                        gradient: kPrimaryGradient,
                        borderRadius: BorderRadius.all(Radius.circular(12)),
                      ),
                      child: Text(
                        "Daha Fazla Quiz",
                        style: TextStyle(color: Colors.white),
                      ),
                    ),
                  ),
                  Spacer(flex: 2),
                ],
              ),
            ),
          )
        ],
      ),
    );
  }

}