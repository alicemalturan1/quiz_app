import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:quiz/controllers/question_controller.dart';
import '../constants.dart';
import 'option.dart';

class QuestionCard extends StatelessWidget{
  final question;
  const QuestionCard({Key? key,@required this.question}) : super(key:key);

  @override
  Widget build(BuildContext context) {
    QuestionController _controller = Get.put(QuestionController());

    return Container(
      padding: EdgeInsets.all(kDefaultPadding),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.only(topLeft: Radius.circular(13),topRight: Radius.circular(13)),

      ),
      child: Column(
        children: [
          Text(question["question"]["question"],
            style: Theme.of(context).textTheme.headline6?.copyWith(color: kBlackColor),),
          SizedBox(
            height: kDefaultPadding/2,
          ),

          ListView.builder(
            itemCount: question["answers"].length,
            shrinkWrap: true,
            itemBuilder: (context, index) {

              return  Option(
                text: question["answers"][index]["text"],
                is_true: question["answers"][index]["is_true"],
                id: question["answers"][index]["id"],
                press: ()=>_controller.checkAns(question["answers"][index]["is_true"],question["answers"][index]["id"]),
              );

            })


        ],
      ),
    ) ;
  }
}