import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import '../controllers/question_controller.dart';
import '../constants.dart';

class Option extends StatelessWidget{
  final text;
  final id;
  final is_true;
  final VoidCallback press;
  const Option({Key? key,this.id,@required this.text,@required this.is_true,required this.press
  }) : super(key:key);

  @override
  Widget build(BuildContext context) {
    return  GetBuilder<QuestionController>(
      init: QuestionController(),
      builder: (qncontroller) {

        Color getTheRightColor(){
          if(qncontroller.isAnswered){
            if(is_true ==1){
              return kGreenColor;
            }else if(qncontroller.selectedAns==this.id &&is_true==0){
              return kRedColor;
            }
          }
          return kGrayColor;
        }
         getTheRightIcon(){
          if(qncontroller.isAnswered){
            if(is_true ==1){
              return CupertinoIcons.check_mark;
            }else if(qncontroller.selectedAns==this.id &&is_true==0){
              return CupertinoIcons.multiply;
            }
          }
        }
        return InkWell(
          onTap: press,
          child: Container(
            margin: EdgeInsets.only(top: kDefaultPadding),
            padding: EdgeInsets.all(kDefaultPadding),
            decoration: BoxDecoration(
                border:Border.all(color: getTheRightColor()),
                borderRadius:BorderRadius.circular(10)

            ),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Text(text,style: TextStyle(color: getTheRightColor(),fontSize: 16),),

                Container(
                  width: 26,
                  height: 26,
                  decoration: BoxDecoration(
                      color: getTheRightColor() == kGrayColor ? Colors.transparent:getTheRightColor(),
                      border:Border.all(
                          color: getTheRightColor()
                      ),
                      borderRadius: BorderRadius.circular(50)

                  ),
                  child: getTheRightColor()==kGrayColor ? null: Icon(getTheRightIcon(),size: 16,color: Colors.white,),
                )
              ],
            ),
          ),
        );
      }
    );
  }
}